<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class ProjectsController extends Controller
{
    function index() {
    	$projectsData = App\Project::all();
    	return view('projects')->with('projectsData', $projectsData);
    }
}
