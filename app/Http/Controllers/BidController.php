<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Bid;
use App\Project;


class BidController extends Controller
{
    function addBid(Request $request) {
        $project_id = $request->post('project_id');


        //check if the user have already the bid
        $currentUserID = $request->user()->id;
        $is_user_has_a_bid = Bid::where('author_id', $currentUserID)->first();
        if($is_user_has_a_bid !== null) {
            return redirect("project/$project_id.html");
        }

        Bid::create([
            'project_id' => $request->post('project_id'),
            'author_id' => $request->post('author_id'),
            'price' => $request->post('price'),
            'comment' => $request->post('comment')
        ]);

        return redirect("project/$project_id.html");
    }

    function finishTheProject(Request $request) {

        $projectID = $request->post('projectID');
        $projectData = Project::where('id', $projectID)->first();
        $projectExecutorID = $projectData->executor;
        $projectAuthorID = $projectData->author_id;
        $projectPrice = $projectData->price;

//      TODO тут нужно отрефакторить код

        $employeeCurrentBalance = DB::table('users')->where('id', $projectAuthorID)->first();
        $employeeCurrentBalance = $employeeCurrentBalance->balance;

        $employerCurrentBalance = DB::table('users')->where('id', $projectExecutorID)->first();
        $employerCurrentBalance = $employerCurrentBalance->balance;

        $employee = DB::table('users')->where('id', $projectAuthorID)->update(['balance' => $employeeCurrentBalance - $projectPrice]);
        $employer = DB::table('users')->where('id', $projectExecutorID)->update(['balance' => $employerCurrentBalance + $projectPrice]);

        DB::table('projects')->where('id', $projectID)->update(['finished' => 'true']);


        return redirect('mailbox/read/thread/1');
    }
}
