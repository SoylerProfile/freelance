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
        $allBids = Bid::all();
		foreach ($allBids as $bid) {
            $bidAuthorData = DB::table('users')->where('id', $bid->author_id)->first();
		    $bidsAuthorsData[] = array($bid, $bidAuthorData);
        }

		$currentUserID = Auth::id();

    	return view('project',
            [
                'projectData' => $projectData,
                'authorData' => $authorData,
                'bidsAuthorsData' => $bidsAuthorsData,
                'currentUserID' => $currentUserID
            ]
        );
    }

    function chooseExecutor() {
        $projectID = $_POST['projectID'];
        $executorID = $_POST['executorID'];

        DB::table('projects')->where('id', $projectID)->update(['executor' => $executorID]);

        return redirect("mailbox/read/thread/3477731");
    }

}
