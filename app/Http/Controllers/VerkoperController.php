<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerkoperController extends Controller
{
    public function index()
    {
        return view('verkoper.verkoper');
    }
}
