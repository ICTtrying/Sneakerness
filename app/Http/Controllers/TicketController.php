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
        // Eager load related models: evenement, prijs, bezoeker
        $query = Ticket::with(['evenement', 'prijs', 'bezoeker']);

        // Filter by event_id if provided in the request
        if ($request->has('event_id')) {
            $query->where('EvenementId', $request->input('event_id'));
        }

        // Get all matching tickets
        $tickets = $query->get();

        // Pass tickets to the view
        return view('Tickets/Tickets', ['tickets' => $tickets]);
    }

    public function purchase(Request $request)
    {
        $ticket = Ticket::findOrFail($request->ticket_id);
        // bijvoorbeeld ticket reserveren / markeren
        $ticket->Isactief = false;
        $ticket->save();

        return redirect()->route('tickets')->with('success', 'Ticket purchased!');
    }

}


