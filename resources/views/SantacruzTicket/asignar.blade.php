<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Asiento - Ticket #{{ $ticket->id }}</title>
</head>
<body>
    <h1>Asignar Asiento al Ticket #{{ $ticket->id }}</h1>
    <p><strong>Viaje ID:</strong> {{ $ticket->viaje_id }} | <strong>Pasajero ID:</strong> {{ $ticket->pasajero_id }}</p>

    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('santacruz.tickets.guardar', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="asiento">Número de asiento:</label>
        <input type="number" name="asiento" id="asiento"
               value="{{ old('asiento', $ticket->asiento) }}" required min="1">

        <button type="submit">Guardar Asiento</button>
    </form>

    <br>
    <a href="{{ route('santacruz.tickets.listar') }}">Volver al listado</a>
</body>
</html>