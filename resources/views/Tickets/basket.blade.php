<x-Navbar />

<!DOCTYPE html>
<html>
<head>
    <title>Basket</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f1f1f1;">
    <div style="max-width: 800px; margin: 30px auto; background: white; padding: 20px;">
        <h1 style="margin-bottom: 20px;">Your Basket</h1>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #f7f7f7;">
                    <th style="border: 1px solid #ccc; padding: 8px;">Event</th>
                    <th style="border: 1px solid #ccc; padding: 8px;">Date</th>
                    <th style="border: 1px solid #ccc; padding: 8px;">Location</th>
                    <th style="border: 1px solid #ccc; padding: 8px;">Time Slot</th>
                    <th style="border: 1px solid #ccc; padding: 8px;">Qty</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($tickets) && isset($tickets['ticket_id']))
                    <tr>
                        <td style="border: 1px solid #ccc; padding: 8px;">{{ $tickets['eventname'] ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">{{ $tickets['date'] ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">{{ $tickets['location'] ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">{{ $tickets['time'] ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">{{ $tickets['amount'] ?? 1 }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="5" style="border: 1px solid #ccc; padding: 8px; text-align: center;">
                            Your basket is empty.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="margin-top: 20px; text-align: right;">
            <a href="/Tickets" style="margin-right: 10px; padding: 6px 12px; border: 1px solid #555; text-decoration: none;">Continue Shopping</a>
            <button style="padding: 6px 12px; background: green; color: white; border: none;">Proceed to Checkout</button>
        </div>
    </div>
</body>
</html>
