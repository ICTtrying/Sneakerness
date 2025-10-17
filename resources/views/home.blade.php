
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sneakerness</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-gray-900" 
data-maintenance="{{ env('APP_MAINTENANCE', 'false') ? 'true' : 'false' }}">

    <!-- Navbar -->
    <x-navbar />

                <!-- Hero Sectie -->
                <div class="mx-auto max-w-xl text-center">
                    <img src="{{ asset('img/Logo-sneakerness.png') }}" alt="Sneakerness-logo" class="mx-auto h-25 w-auto" />
                    <h1 class="text-4xl font-bold tracking-tight text-balance text-white sm:text-6xl">{{ $home['title'] }}</h1>
                    <p class="mt-6 text-lg font-medium text-pretty text-gray-400 sm:text-xl">{{ $home['content'] }}</p>
                    <div class="mt-8 flex items-center justify-center gap-x-4">
                        <a href="/Tickets" class="rounded-md bg-indigo-500 px-5 py-3 text-base font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Tickets</a>
                        <a href="/Events" class="text-base font-semibold text-white">Evenementen <span aria-hidden="true">→</span></a>
                    </div>
                </div>

                <!-- Sectie met extra info -->
                <div class="mx-auto max-w-6xl py-12">
                    <h2 class="text-3xl font-bold text-white text-center mb-10">Ontdek Sneakerness</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Infokaart 1 -->
                        <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                            <img src="https://www.nicekicks.com/files/2023/01/sneaker-sales-decline-lead.jpg" alt="Sneakermarkt" class="mb-4 rounded-lg h-40 w-full object-cover">
                            <h3 class="text-xl font-semibold text-white mb-2">Sneakermarkt</h3>
                            <p class="text-gray-400 text-center">Verken een enorme markt met zeldzame, gelimiteerde en klassieke sneakers van topverkopers en particuliere verzamelaars. Vind je heilige graal of verkoop je eigen paren!</p>
                        </div>
                        <!-- Infokaart 2 -->
                        <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                            <img src="https://1001.pics/s/900x600/kenmerken/workshops/workshops.fpbd992cd1.jpg" alt="Workshops" class="mb-4 rounded-lg h-40 w-full object-cover">
                            <h3 class="text-xl font-semibold text-white mb-2">Workshops & Lezingen</h3>
                            <p class="text-gray-400 text-center">Doe mee aan interactieve workshops en inspirerende lezingen van industrie-experts, designers en sneakerheads. Leer over de sneakercultuur, customizen en meer.</p>
                        </div>
                        <!-- Infokaart 3 -->
                        <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                            <img src="https://cdn.prod.website-files.com/633ba7c875e84d0d18d5d77d/66269254bd27bf6f1a2c1520_615c60d2fea03c37779d91f3_community.jpg" alt="Gemeenschap" class="mb-4 rounded-lg h-40 w-full object-cover">
                            <h3 class="text-xl font-semibold text-white mb-2">Community & Cultuur</h3>
                            <p class="text-gray-400 text-center">Maak verbinding met andere sneakerliefhebbers, deel verhalen en vier de cultuur. Geniet van livemuziek, kunst en exclusieve releases tijdens het evenement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- TailwindPlus Script -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

   
</body>
</html>