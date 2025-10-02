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
    public function index(Request $request)
    {
        // Get all tickets with related models
        $tickets = Ticket::with(['evenement', 'prijs', 'bezoeker'])->get();

        // Pass tickets to the view
        return view('Tickets.EventTickets', ['tickets' => $tickets]);
    }

    public function Ticketskinds(Ticket $EventTicket)
    {
        return view('Tickets.Ticketkinds', ['EventTicket' => $EventTicket]);
    }

    public function addToCart(Request $request)
    {
        dd($request->all());
    }

}


