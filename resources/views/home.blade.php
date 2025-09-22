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

<body class="min-h-screen bg-gray-900">

    <x-navbar />
    <div class="bg-gray-900">
        <div class="relative isolate px-4 pt-10 lg:px-6">
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-96 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-192">
                </div>
            </div>
            <div class="mx-auto max-w-xl">
                <div class="text-center">
                    <img src="{{ asset('Logo-sneakerness.png') }}" alt="Sneakerness Logo" class="mx-auto mb-4 h-25 w-auto" />
                    <h1 class="text-4xl font-bold tracking-tight text-balance text-white sm:text-6xl"> {{ $home['title'] }}</h1>
                    <p class="mt-6 text-lg font-medium text-pretty text-gray-400 sm:text-xl">{{ $home['content'] }}</p>
                    <div class="mt-8 flex items-center justify-center gap-x-4">
                        <a href="/tickets"
                            class="rounded-md bg-indigo-500 px-5 py-3 text-base font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Tickets</a>
                        <a href="/events" class="text-base font-semibold text-white">Events <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>

            <!-- Extra Info Section -->
            <div class="mx-auto max-w-6xl py-12">
                <h2 class="text-3xl font-bold text-white text-center mb-10">Discover Sneakerness</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Info Card 1 -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="https://www.nicekicks.com/files/2023/01/sneaker-sales-decline-lead.jpg" alt="Sneaker Market" class="mb-4 rounded-lg h-40 w-full object-cover">
                        <h3 class="text-xl font-semibold text-white mb-2">Sneaker Market</h3>
                        <p class="text-gray-400 text-center">Explore a huge marketplace with rare, limited, and classic sneakers from top vendors and private collectors. Find your next grail or sell your own pairs!</p>
                    </div>
                    <!-- Info Card 2 -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="https://1001.pics/s/900x600/kenmerken/workshops/workshops.fpbd992cd1.jpg" alt="Workshops" class="mb-4 rounded-lg h-40 w-full object-cover">
                        <h3 class="text-xl font-semibold text-white mb-2">Workshops & Talks</h3>
                        <p class="text-gray-400 text-center">Join interactive workshops and inspiring talks from industry leaders, designers, and sneakerheads. Learn about sneaker culture, customization, and more.</p>
                    </div>
                    <!-- Info Card 3 -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="https://cdn.prod.website-files.com/633ba7c875e84d0d18d5d77d/66269254bd27bf6f1a2c1520_615c60d2fea03c37779d91f3_community.jpg" alt="Community" class="mb-4 rounded-lg h-40 w-full object-cover">
                        <h3 class="text-xl font-semibold text-white mb-2">Community & Culture</h3>
                        <p class="text-gray-400 text-center">Connect with fellow sneaker enthusiasts, share stories, and celebrate the culture. Enjoy live music, art, and exclusive releases throughout the event.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>

</html>