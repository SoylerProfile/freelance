<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function index($id) {
		$projectData = DB::table('projects')->where('id', $id)->first();
		
		$author_id = $projectData->author_id;
		$authorData = DB::table('users')->where('id', $author_id)->first();

    	return view('project', ['projectData' => $projectData, 'authorData' => $authorData]);
    }
}
