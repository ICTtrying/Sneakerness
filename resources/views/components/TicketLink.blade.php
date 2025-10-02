@props(['name', 'price', 'amount' => 1, 'timeSlots' => []])

<div {{ $attributes->merge(['class' => 'ticket flex items-center gap-4 p-4 border rounded-lg shadow-sm']) }}>
    <img src="{{ asset('img/Sneakerlogo.png') }}" alt="Logo" class="ticket-logo h-10">

    <span class="ticket-name font-bold">{{ $name }}</span>
    <span class="ticket-price text-gray-700">{{ $price }} EUR</span>

    <form action="/add-to-cart" method="POST" class="flex items-center gap-3">
        @csrf
        @if (!empty($timeSlots))
            <select name="time" class="ticket-time-dropdown border rounded px-2 py-1">
                @foreach ($timeSlots as $slot)
                    <option value="{{ $slot }}">{{ $slot }}</option>
                @endforeach
            </select>
        @endif
        <input type="hidden" name="age_group" value="{{ Str::contains($name, '12+') ? '12+' : '12-' }}">
        <input type="hidden" name="price" value="{{ $price }}">
        <input type="number" name="amount" value="{{ $amount }}" min="1"
            class="ticket-amount w-16 border rounded px-2 py-1 text-center">


        <button type="submit"
            class="ticket-buy-btn bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700 transition">
            Buy Ticket
        </button>
    </form>
</div>
