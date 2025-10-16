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
        $tickets = Ticket::all();

        // Pass tickets to the view
        return view('Tickets.EventTickets', ['tickets' => $tickets]);
    }

    public function addToCart(Request $request)
    {

        $basket = session('basket', []);

        $newTicket = $request->only(['event_id', 'eventname', 'date', 'location', 'time', 'amount', 'price']);
        $newAmount = (int) $newTicket['amount'];

        $found = false;

        // check of ticket al bestaat
        foreach ($basket as &$ticket) {
            if ($ticket['event_id'] == $newTicket['event_id'] && $ticket['time'] == $newTicket['time']) {
                // voeg amount toe
                $ticket['amount'] += $newAmount;
                // update price if needed
                $ticket['price'] = $newTicket['price'];
                $found = true;
                break;
            }
        }

        // als ticket nog niet bestaat, toevoegen
        if (! $found) {
            $basket[] = $newTicket;
        }

        session(['basket' => $basket]);

        $message = 'Ticket succesvol toegevoegd aan uw mandje';

        $tickets = ticket::all();

        return view('Tickets.EventTickets', ['message' => $message, 'tickets' => $tickets]);
    }

    public function deletebasket()
    {
        session()->forget('basket');

        return view('Tickets.basket');
    }

    public function removeItem(Request $request)
    {
        $basket = session('basket', []);

        foreach ($basket as $i => $item) {
            // match op event_id en time (time kan aanwezig zijn)
            if ($item['event_id'] == $request->input('event_id')
                && (! isset($request->time) || ($item['time'] ?? null) == $request->time)
            ) {
                // verwijder het item
                array_splice($basket, $i, 1);
                break;
            }
        }

        session(['basket' => $basket]);

        return redirect('/mandje');
    }

    public function loginneeded()
    {
        $message = 'Je moet ingelogd zijn om tickets te kopen.';
        return view('Tickets.EventTickets', ['message' => $message]);
    }
}
