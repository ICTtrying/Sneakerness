<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verkoper pagina</title>
</head>
<body>
 <div class="max-w-lg mx-auto p-6 bg-white rounded shadow">
    @if (session()->has('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label class="block text-gray-700">Naam</label>
            <input type="text" wire:model="name" class="w-full border rounded px-3 py-2" />
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700">E-mail</label>
            <input type="email" wire:model="email" class="w-full border rounded px-3 py-2" />
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700">Onderwerp</label>
            <input type="text" wire:model="subject" class="w-full border rounded px-3 py-2" />
            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700">Bericht</label>
            <textarea wire:model="message" rows="5" class="w-full border rounded px-3 py-2"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Verstuur
        </button>
    </form>
</div>

</body>
</html>