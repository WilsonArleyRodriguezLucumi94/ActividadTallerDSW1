@extends('RomeroTicket.layout')

@section('titulo', 'Comprar ticket')

@section('contenido')
    <h1>Comprar ticket</h1>

    @if (session('exito'))
        <div class="exito">{{ session('exito') }}</div>
    @endif

    @if ($pasajeros->isEmpty() || $viajes->isEmpty())
        <div class="aviso">
            Aún no hay pasajeros o viajes registrados. Ejecuta <code>php artisan migrate:fresh --seed</code>.
        </div>
    @else
        <form action="{{ route('romero.tickets.guardar') }}" method="POST">
            @csrf

            <div class="campo">
                <label for="pasajero_id">Pasajero</label>
                <select id="pasajero_id" name="pasajero_id" required>
                    <option value="">Selecciona un pasajero</option>
                    @foreach ($pasajeros as $pasajero)
                        <option value="{{ $pasajero->id }}" @selected(old('pasajero_id') == $pasajero->id)>
                            {{ $pasajero->nombre }} ({{ $pasajero->identificacion }})
                        </option>
                    @endforeach
                </select>
                @error('pasajero_id')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="viaje_id">Viaje</label>
                <select id="viaje_id" name="viaje_id" required>
                    <option value="">Selecciona un viaje</option>
                    @foreach ($viajes as $viaje)
                        <option value="{{ $viaje->id }}" @selected(old('viaje_id') == $viaje->id)>
                            Viaje {{ $viaje->id }}, {{ \Carbon\Carbon::parse($viaje->fecha)->format('Y-m-d') }} {{ substr($viaje->hora, 0, 5) }}, ${{ number_format((float) $viaje->precio, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
                @error('viaje_id')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="numero_asiento">Número de asiento</label>
                <input type="number" id="numero_asiento" name="numero_asiento" min="1" value="{{ old('numero_asiento') }}" required>
                @error('numero_asiento')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr class="separador">

            <button type="submit">Registrar compra</button>
        </form>
    @endif
@endsection