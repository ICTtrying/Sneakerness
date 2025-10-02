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

        {{-- Example table of vendors --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Seller</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Stand Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($stands as $stand)
                    {{-- If stand is empty, write this line --}}
                    @if(empty($stand))
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-sm text-gray-900 dark:text-gray-200 text-center">Stand is empty</td>
                        </tr>
                    @endif
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $stand->verkoper->Naam }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $stand->StandType }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">€{{ $stand->Prijs }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                            @if($stand->VerhuurdStatus == 1 || $stand->verkoper->Naam)
                                Rented
                            @else
                                Available
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-sm text-gray-900 dark:text-gray-200 text-center">No stands found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>