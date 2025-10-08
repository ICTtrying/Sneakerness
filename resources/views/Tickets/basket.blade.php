<x-Navbar />

<!DOCTYPE html>
<html>

<head>
    <title>mandje</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="basket-container">
        <h1>Uw mandje</h1>
        <a href="/delete-mandje" class="clearmandje">Clear mandje</a>

        @if (!empty($mandje))
            <form action="/buy" method="POST" id="basketForm">
                @csrf

                @foreach ($mandje as $mandjeitem)
                    <div class="basket-item" data-price="{{ $mandjeitem['price'] }}">
                        <div class="event-name">{{ $mandjeitem['eventname'] }}</div>
                        <div>{{ $mandjeitem['date'] }}</div>
                        <div>{{ $mandjeitem['location'] }}</div>
                        <div class="price">€{{ number_format($mandjeitem['price'], 2, ',', '.') }}</div>

                        <div class="quantity-input">
                            <input type="number" name="amount[{{ $mandjeitem['event_id'] }}]"
                                value="{{ $mandjeitem['amount'] }}" min="1">
                        </div>

                        <input type="hidden" name="event_id[]" value="{{ $mandjeitem['event_id'] }}">

                        <!-- remove form -->
                        <form action="{{ route('remove.item') }}" method="POST" style="margin-left:12px;">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $mandjeitem['event_id'] }}">
                            <!-- als je 'time' in je mandje opslaat, stuur die ook mee -->
                            @if (isset($mandjeitem['time']))
                                <input type="hidden" name="time" value="{{ $mandjeitem['time'] }}">
                            @endif
                            <button type="submit"
                                style="background:#ff6b6b;border:none;color:white;padding:6px 8px;border-radius:6px;cursor:pointer;">
                                Verwijder
                            </button>
                        </form>
                    </div>
                @endforeach


                <div style="margin-top:30px;">
                    <h2>Fill out your info</h2>
                    <input type="text" name="name" placeholder="Full Name" class="dummy-input" required>
                    <input type="text" name="address" placeholder="Address" class="dummy-input" required>
                    <input type="text" name="city" placeholder="City" class="dummy-input" required>
                    <input type="text" name="zip" placeholder="ZIP Code" class="dummy-input" required>
                    <input type="text" name="card" placeholder="Card Number" class="dummy-input" required>
                </div>

                <div class="basket-footer">
                    <a href="/Tickets">Continue Shopping</a>
                    <span id="totalPrice" style="font-weight:600; color:#27ae60; margin-right:12px;">Totaal:
                        €0,00</span>
                    <button type="submit">Buy</button>
                </div>
            </form>

            <script>
                const quantityInputs = document.querySelectorAll('.quantity-input input');
                const totalEl = document.getElementById('totalPrice');

                function updateTotal() {
                    let total = 0;
                    quantityInputs.forEach(input => {
                        const itemDiv = input.closest('.basket-item');
                        const price = parseFloat(itemDiv.dataset.price) || 0;
                        total += price * parseInt(input.value || 0);
                    });
                    totalEl.textContent = 'Totaal: €' + total.toFixed(2).replace('.', ',');
                }

                quantityInputs.forEach(input => {
                    input.addEventListener('input', updateTotal);
                });

                updateTotal();
            </script>
        @else
            <div>Uw mandje is leeg.</div>
        @endif
    </div>
</body>

</html>
