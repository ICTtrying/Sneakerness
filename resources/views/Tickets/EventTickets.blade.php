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
                    <div class="ticket-cards">
                        <div class="event-name-card">
                            <div class="Ticket-Logo-card">
                                <img src="{{ asset('img/Sneakerlogo.png') }}" alt="Sneaker Logo"
                                    class="mx-auto mb-4 h-16 w-16 object-contain">
                            </div>
                            <div class="Ticket-Name-card">
                                {{ $ticket->Evenement->Naam }}
                            </div>
                            <div class="Ticket-Location-card">
                                {{ $ticket->Evenement->Locatie}}
                            </div>
                            <div class="Ticket-Date-card">
                                {{ $ticket->Evenement->Datum }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>


</html>
