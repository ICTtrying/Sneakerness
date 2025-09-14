<?php

namespace App\Http\Controllers;
use App\models\Job;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->get();
        return view('testpage', ['jobs' => $jobs]);
    }
}
