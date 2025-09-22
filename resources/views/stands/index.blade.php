@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    
    <div class="container my-5">
        <h1>{{ $title }}</h1>
         <p>{{ $message }}</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>VerkoperId</th>
                <th>StandType</th>
                <th>Prijs</th>
                <th>VerhuurdStatus</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($stands as $stand)
                <tr>
                    <td>{{ $stand->VerkoperId }}</td>
                    <td>{{ $stand->StandType }}</td>
                    <td>€{{ $stand->Prijs }}</td>
                    <td>{{ $stand->VerhuurdStatus == 1 ? 'Verhuurd' : 'Beschikbaar' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Geen stands gevonden.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</body>
</html>

