<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignación de Asientos - Santacruz</title>
</head>
<body>
    <h1>RF11 - Asignar Número de Asiento a Tickets</h1>

    @if(session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID Ticket</th>
                <th>ID Pasajero</th>
                <th>ID Viaje</th>
                <th>Estado</th>
                <th>Asiento</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->pasajero_id }}</td>
                    <td>{{ $ticket->viaje_id }}</td>
                    <td>{{ $ticket->estado }}</td>
                    <td>{{ $ticket->numero_asiento ?? 'Sin asignar' }}</td>
                    <td>
                        <a href="{{ route('santacruz.tickets.form', $ticket->id) }}">
                            Asignar / Cambiar Asiento
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>