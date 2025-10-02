<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneakerness</title>
    @vite('resources/css/Tickets.css')
</head>

<body>
    <video autoplay loop muted playsinline id="background-video">
        <source src="/img/Trailer.mp4" type="video/mp4">
    </video>

    <div id="video-overlay"></div>

    <x-Navbar />

    <div class="page">
        <h1 class="text-6xl font-extrabold mb-7 mt-7 text-center">
            Choose Your Event
        </h1>

        <div class="tickets-container flex flex-wrap justify-center gap-8 mt-8">
            @if ($tickets->isEmpty())
                <div class="text-center text-red-500 font-bold text-xl">
                    Sorry, No tickets available.
                </div>
            @else
                @foreach ($tickets as $ticket)
                    <form action="/add-to-cart" method="POST" class="ticket-cards">
                        @csrf
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                        <input type="hidden" name="eventname" value="{{ $ticket->Evenement->Naam }}">
                        <input type="hidden" name="date" value="{{ $ticket->Evenement->Datum }}">
                        <input type="hidden" name="location" value="{{ $ticket->Evenement->Locatie }}">

                        <div class="event-name-card">
                            <div class="Ticket-Logo-card">
                                <img src="{{ asset('img/Sneakerlogo.png') }}" alt="Sneaker Logo"
                                    class="mx-auto mb-4 h-16 w-16 object-contain">
                            </div>
                            <div class="Ticket-Name-card">
                                {{ $ticket->Evenement->Naam }}
                            </div>
                            <div class="Ticket-Location-card">
                                {{ $ticket->Evenement->Locatie }}
                            </div>
                            <div class="Ticket-Date-card">
                                {{ $ticket->Evenement->Datum }}
                            </div>
                            <div>
                                <select name="time" class="Ticket-Time-card">
                                    @for ($hour = 8; $hour <= 20; $hour += 2)
                                        <option value="{{ sprintf('%02d:00', $hour) }}">{{ sprintf('%02d:00', $hour) }}
                                            - {{ sprintf('%02d:00', $hour + 2) }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <input type="number" name="amount" min="1" max="10" value="1"
                                    class="Ticket-Amount-card" />
                            </div>
                            <div>
                                <button type="submit"
                                    class="Ticket-Buy-btn bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    Buy Ticket
                                </button>
                            </div>
                        </div>
                    </form>
                @endforeach
            @endif
        </div>
    </div>
</body>

</html>
