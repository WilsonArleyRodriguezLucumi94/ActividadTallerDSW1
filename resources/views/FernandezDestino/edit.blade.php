<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Destino - Edinson Fernandez</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textarea { width: 100%; max-width: 400px; padding: 8px; }
        button { background: #28a745; color: #fff; border: none; padding: 10px 15px; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Modificar Destino #{{ $destino->id }}</h1>

    <form action="{{ route('fernandez.destinos.actualizar', $destino->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ciudad">Nombre de la Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad', $destino->ciudad) }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4">{{ old('descripcion', $destino->descripcion) }}</textarea>
        </div>

        <button type="submit">Guardar Cambios</button>
        <a href="{{ route('fernandez.destinos.consultar') }}">Cancelar</a>
    </form>
</body>
</html>