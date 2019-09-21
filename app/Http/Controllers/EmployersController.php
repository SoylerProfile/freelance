<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployersController extends Controller
{
    function index() {
        return view('employers');
    }
}
