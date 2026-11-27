<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .campo { margin-bottom: 12px; }
        label { display: block; margin-bottom: 4px; }
        input, select { width: 300px; padding: 6px; }
        button { padding: 8px 14px; background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h2>Registrar Vehículo</h2>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('henao.vehiculos.store') }}" method="POST">
        @csrf
        <div class="campo">
            <label>Placa:</label>
            <input type="text" name="placa" value="{{ old('placa') }}" placeholder="Ej: ABC123" required>
        </div>

        <div class="campo">
            <label>Tipo:</label>
            <select name="tipo" required>
                <option value="Bus">Bus</option>
                <option value="Buseta">Buseta</option>
                <option value="Microbus">Microbús</option>
            </select>
        </div>

        <div class="campo">
            <label>Capacidad:</label>
            <input type="number" name="capacidad" value="{{ old('capacidad') }}" min="1" required>
        </div>

        <div class="campo">
            <label>Estado:</label>
            <select name="estado" required>
                <option value="disponible">Disponible</option>
                <option value="mantenimiento">Mantenimiento</option>
            </select>
        </div>

        <button type="submit">Guardar</button>
        <a href="{{ route('henao.vehiculos.index') }}">Cancelar</a>
    </form>
</body>
</html>
