<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;



class TicketController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('Tickets/Tickets', ['tickets' => $tickets]);
    }
}
