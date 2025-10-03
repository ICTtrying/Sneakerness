<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all tickets with related models
        $tickets = Ticket::with(['evenement', 'prijs', 'bezoeker'])->get();

        // Pass tickets to the view
        return view('Tickets.EventTickets', ['tickets' => $tickets]);
    }

    public function addToCart(Request $request)
    {
        $ticket = $request->all();

        return view('Tickets.basket', ['tickets' => $ticket]);
    }
}
