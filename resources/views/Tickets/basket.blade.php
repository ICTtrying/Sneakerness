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
        <a href="/delete-basket" class="clearmandje">Clear mandje</a>

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

                        @if (count($mandje) > 1)
                            <button type="button"
                                onclick="removeItem('{{ $mandjeitem['event_id'] }}'{{ isset($mandjeitem['time']) ? ', \'' . $mandjeitem['time'] . '\'' : '' }})"
                                style="background:#ff6b6b;border:none;color:white;padding:6px 8px;border-radius:6px;cursor:pointer;">
                                Verwijder
                            </button>
                        @endif
                    </div>
                @endforeach

                <script>
                    function removeItem(eventId, time = null) {
                        const data = new FormData();
                        data.append('event_id', eventId);
                        if (time) data.append('time', time);
                        data.append('_token', '{{ csrf_token() }}');

                        fetch('/remove-item', {
                            method: 'POST',
                            body: data
                        }).then(() => location.reload());
                    }
                </script>


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
