<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Bid;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    function index($id) {
		$projectData = DB::table('projects')->where('id', $id)->first();
		
		$author_id = $projectData->author_id;
		$authorData = DB::table('users')->where('id', $author_id)->first();

		$bidsAuthorsData = array();
        $allBids = Bid::all()->where('project_id', $projectData->id);
		foreach ($allBids as $bid) {
            $bidAuthorData = DB::table('users')->where('id', $bid->author_id)->first();
		    $bidsAuthorsData[] = array($bid, $bidAuthorData);
        }

    	return view('project',
            [
                'projectData' => $projectData,
                'authorData' => $authorData,
                'bidsAuthorsData' => $bidsAuthorsData,
                'allBids' => $allBids
            ]
        );
    }

    function chooseExecutor(Request $request) {
        $projectID = $request->post('projectID');
        $executorID = $request->post('executorID');

        DB::table('projects')->where('id', $projectID)->update(['executor' => $executorID]);

        return redirect("mailbox/read/thread/3477731");
    }

    function createProject() {
        $user = Auth::user();
        if($user->profile_type !== 'employee' ) {
            return redirect('/');
        }

        return view('createProject');
    }

    function createProjectSave(Request $request) {

        if(DB::table('projects')->insert([
            'author_id' => $request->post('author_id'),
            'title' => $request->post('title'),
            'description' => $request->post('description'),
            'price' => $request->post('price'),
            ]))
            return redirect("/");
        else
            return "/";

    }

}
