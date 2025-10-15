<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MandjeController extends Controller
{
    public function index() {
        $mandje = session('basket', []);
        return view('Tickets.basket', ['mandje' => $mandje]);
    }
}
