<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Bid;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    function addBid() {
        $project_id = $_POST['project_id'];


        //check if the user have already the bid
        $currentUserID = Auth::id();
        $is_user_has_a_bid = Bid::where('author_id', $currentUserID)->first();
//        echo "<pre>";
//        var_dump($is_user_has_a_bid);
//        die();
        if($is_user_has_a_bid !== null) {
            return redirect("project/$project_id.html");
        }

        Bid::create([
            'project_id' => $_POST['project_id'],
            'author_id' => $_POST['author_id'],
            'price' => $_POST['price'],
            'comment' => $_POST['comment']
        ]);

        return redirect("project/$project_id.html");
    }

    function finishTheProject() {

        $projectID = $_POST['projectID'];
        $projectData = Project::where('id', $projectID)->first();
        $projectExecutorID = $projectData->executor;
        $projectAuthorID = $projectData->author_id;
        $projectPrice = $projectData->price;

//        echo $projectID . "<br>";
//        echo $projectExecutorID . "<br>";
//        echo $projectPrice . "<br>";
//        echo $projectID . "<br>";

//      TODO тут нужно отрефакторить код

        $employeeCurrentBalance = DB::table('users')->where('id', $projectAuthorID)->first();
        $employeeCurrentBalance = $employeeCurrentBalance->balance;

        $employerCurrentBalance = DB::table('users')->where('id', $projectExecutorID)->first();
        $employerCurrentBalance = $employerCurrentBalance->balance;

        $employee = DB::table('users')->where('id', $projectAuthorID)->update(['balance' => $employeeCurrentBalance - $projectPrice]);
        $employer = DB::table('users')->where('id', $projectExecutorID)->update(['balance' => $employerCurrentBalance + $projectPrice]);

        return redirect('mailbox/read/thread/1');
    }
}
