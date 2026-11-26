<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar pasajero</title>
    <style>
        body { font-family: sans-serif; max-width: 420px; margin: 40px auto; }
        label { display: block; margin-top: 12px; }
        input { width: 100%; padding: 6px; box-sizing: border-box; }
        button { margin-top: 16px; padding: 8px 16px; }
        .error { color: #b00020; font-size: 14px; }
        .exito { background: #e6f4ea; padding: 8px; }
    </style>
</head>
<body>
    <h1>Registrar pasajero</h1>

    @if (session('exito'))
        <p class="exito">{{ session('exito') }}</p>
    @endif

    <form method="POST" action="{{ route('bolanos.pasajeros.guardar') }}">
        @csrf

        <label>Nombre
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        @error('nombre') <span class="error">{{ $message }}</span> @enderror

        <label>Identificación
            <input type="text" name="identificacion" value="{{ old('identificacion') }}">
        </label>
        @error('identificacion') <span class="error">{{ $message }}</span> @enderror

        <label>Teléfono
            <input type="text" name="telefono" value="{{ old('telefono') }}">
        </label>
        @error('telefono') <span class="error">{{ $message }}</span> @enderror

        <label>Correo electrónico
            <input type="email" name="correo" value="{{ old('correo') }}">
        </label>
        @error('correo') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
