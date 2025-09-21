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
    
    <x-Navbar />

    <div class="page">
        <h1 class="text-6xl font-extrabold mb-4 text-center">
            Buy your tickets here!
        </h1>

        <div class="tickets-container flex flex-wrap justify-center gap-8 mt-8">
            @foreach ($tickets as $ticket)
                <div class="ticket-card">
                    <a href="/Tickets/{{ $ticket->Id }}" class="event-name-card">{{ $ticket->Evenement->Naam }}</a>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
