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
    public function index(Request $request)
    {
        // Get all tickets with related models
        $tickets = Ticket::with(['evenement', 'prijs', 'bezoeker'])->get();

        // Pass tickets to the view
        return view('Tickets.EventTickets', ['tickets' => $tickets]);
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'ticket_id' => 'required|integer|exists:tickets,id',
            'eventname' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'time' => 'required|string',
            'amount' => 'required|integer|min:1|max:10',
        ]);

        $ticket = Ticket::find($validated['ticket_id']);

        // Store data in session
        session(['basket_data' => [
            'ticket' => $ticket,
            'eventname' => $validated['eventname'],
            'date' => $validated['date'],
            'location' => $validated['location'],
            'time' => $validated['time'],
            'amount' => $validated['amount'],
        ]]);

        // Redirect to basket page
        return redirect()->route('basket');
    }
}
