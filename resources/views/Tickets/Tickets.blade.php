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
            <div class="ticket-card bg-white rounded-xl shadow-lg p-6 w-80">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">{{ $ticket->event_name }}</h2>
                <div class="mb-2 text-gray-600">
                    <span class="font-semibold">Date:</span> {{ $ticket->event_date }}
                </div>
                <div class="mb-2 text-gray-600">
                    <span class="font-semibold">Price:</span> ${{ number_format($ticket->price, 2) }}
                </div>
                <div class="mb-2 text-gray-600">
                    <span class="font-semibold">Seat:</span> {{ $ticket->seat_number }}
                </div>
                <div class="text-gray-600">
                    <span class="font-semibold">Buyer:</span> {{ $ticket->buyer_name }} ({{ $ticket->buyer_email }})
                </div>
            </div>
        @endforeach
    </div>
    </div>
</body>
</html>
