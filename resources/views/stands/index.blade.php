@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-900 ">
    <x-navbar />

    <div class="space-y-6 m-6">
        <p class="text-gray-700 dark:text-gray-200">
            <strong class="text-4xl">{{ $title }}</strong>
            <?php echo str_repeat("<br>", 4); ?>
            {{ $message }}
        </p>
        @if(session('success'))
            <div id="success-message" class="text-green-500">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('stands.create') }}">
            <button class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 mb-4 cursor-pointer">
            Stand toevoegen
            </button>
        </a>

        {{-- Voorbeeldtabel van verkopers --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Verkoper</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Categorie</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Prijs</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Dagen</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Type stand</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Verwijderen</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($stands as $stand)
                    {{-- Als de stand leeg is, schrijf deze regel --}}
                    @if(empty($stand))
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-sm text-gray-900 dark:text-gray-200 text-center">Stand is leeg</td>
                        </tr>
                    @endif
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                            {{ $stand->verkoper ? $stand->verkoper->Naam : 'Beschikbaar' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                            {{ $stand->verkoper ? $stand->verkoper->VerkooptSoort : '' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">€{{ $stand->Prijs }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $stand->Dagen }} dagen</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $stand->StandType }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                            @if($stand->VerhuurdStatus == 1 || $stand->verkoper?->Naam)
                                Verhuurd
                            @else
                                Beschikbaar
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('stands.destroy', $stand->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze stand wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                               <a href="">
                                <button type="submit" class="rounded-md bg-red-500 px-6 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 cursor-pointer">
                                    Verwijderen
                                </button>
                               </a>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-sm text-gray-900 dark:text-gray-200 text-center">Geen stands gevonden</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
    // Laat de melding na 3 seconden verdwijnen
    setTimeout(() => {
        const message = document.getElementById('success-message');
        if (message) {
            message.style.transition = "opacity 0.5s ease";
            message.style.opacity = "0";
            setTimeout(() => message.remove(), 500); // Verwijder na fade-out
        }
    }, 3000);
</script>

</body>
</html>