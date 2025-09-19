<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tickets Website</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; flex-direction: column; min-height: 100vh;">

<h1 style="color: #333; margin-top: 20px;">🎫 Tickets Website</h1>

<div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 90%; max-width: 600px;">

<h2 style="color: #555;">Add Ticket</h2>
<form id="ticketForm" style="display: flex; flex-direction: column;">
    <input type="text" id="visitor" placeholder="Visitor Name" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
    <input type="text" id="event" placeholder="Event Name" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
    <input type="number" id="quantity" min="1" placeholder="Quantity" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
    <button type="submit" style="padding: 10px; border: none; border-radius: 5px; background-color: #4CAF50; color: white; font-weight: bold; cursor: pointer;">Add Ticket</button>
</form>

<h2 style="color: #555; margin-top: 20px;">All Tickets</h2>
<table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
    <thead>
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">Visitor</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Event</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Quantity</th>
        </tr>
    </thead>
    <tbody id="ticketTable">
        <!-- Tickets appear here -->
    </tbody>
</table>

</div>

<script>
const tickets = [];

document.getElementById('ticketForm').addEventListener('submit', function(e){
    e.preventDefault();

    const visitor = document.getElementById('visitor').value;
    const event = document.getElementById('event').value;
    const quantity = document.getElementById('quantity').value;

    tickets.push({visitor, event, quantity});

    renderTickets();
    this.reset();
});

function renderTickets() {
    const tbody = document.getElementById('ticketTable');
    tbody.innerHTML = '';
        tickets.forEach(t => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td style="padding: 10px; border: 1px solid #ddd;">${t.visitor}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">${t.event}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">${t.quantity}</td>
            `;
            tbody.appendChild(row);
        });
    }
    </script>
    
    </body>
    </html>

