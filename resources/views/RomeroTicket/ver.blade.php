@extends('RomeroTicket.layout')

@section('titulo', 'Ticket registrado')

@section('contenido')
    <h1>Ticket registrado</h1>

    @if (session('exito'))
        <div class="exito">{{ session('exito') }}</div>
    @endif

    <dl class="resumen">
        <dt>Número de ticket</dt>
        <dd>{{ $ticket->id }}</dd>

        <dt>Pasajero</dt>
        <dd>{{ $ticket->pasajero->nombre }}</dd>

        <dt>Identificación</dt>
        <dd>{{ $ticket->pasajero->identificacion }}</dd>

        <dt>Fecha</dt>
        <dd>{{ \Carbon\Carbon::parse($ticket->viaje->fecha)->format('Y-m-d') }}</dd>

        <dt>Hora</dt>
        <dd>{{ substr($ticket->viaje->hora, 0, 5) }}</dd>

        <dt>Precio</dt>
        <dd>${{ number_format((float) $ticket->viaje->precio, 0, ',', '.') }}</dd>

        <dt>Asiento</dt>
        <dd>{{ $ticket->numero_asiento }}</dd>

        <dt>Estado</dt>
        <dd>{{ ucfirst($ticket->estado) }}</dd>
    </dl>

    <hr class="separador">

    <a class="boton" href="{{ route('romero.tickets.crear') }}">Registrar otra compra</a>
@endsection