<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/Tickets.css')
</head>

<body>
    <x-Navbar />
    <div class="pageTicketkinds">
        <div class="event-card">
            <h1 class="text-6xl font-extrabold mb-7 mt-7 text-center" style="font-size: clamp(32px, 8vw, 48px);">
                {{ $EventTicket->Evenement->Naam }}
            </h1>
            <h2 class="text-2xl font-semibold mb-4 text-center">
                {{ $EventTicket->Evenement->Locatie }}
            </h2>
            <h3 class="text-xl font-medium mb-4 text-center">
                {{ $EventTicket->Evenement->Datum }}
            </h3>
        </div>

        <div class="ticketcontainer">
            <p class="text-4xl font-extrabold mb-7 mt-7 text-center"
                style="font-size: 24px; font-size: clamp(24px, 5vw, 36px);">
                Choose Your Ticket
            </p>

            <x-TicketLink name="Age -12" price="{{ $EventTicket->Prijs->Tarief - 5 }}"
                :timeSlots="collect(range(6, 20, 2))->map(fn($hour) => sprintf('%02d:00 - %02d:00', $hour, $hour + 2))" amount="1" />
            <x-TicketLink name="Age 12+" price="{{ $EventTicket->Prijs->Tarief }}"
                :timeSlots="collect(range(6, 20, 2))->map(fn($hour) => sprintf('%02d:00 - %02d:00', $hour, $hour + 2))" amount="1" />



        </div>
    </div>

    <?php
    ?>
</body>

</html>
