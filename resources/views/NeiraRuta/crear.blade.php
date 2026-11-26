<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Ruta - RF07</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; padding:20px; }
        .caja { max-width:520px; margin:auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,.15); }
        h2 { text-align:center; color:#1a1a2e; }
        label { display:block; margin-top:12px; font-weight:bold; }
        select, input { width:100%; padding:8px; margin-top:4px; border:1px solid #ccc; border-radius:4px; box-sizing:border-box; }
        button { margin-top:18px; width:100%; padding:10px; background:#1a1a2e; color:#fff; border:none; border-radius:4px; cursor:pointer; }
        .error { color:#b00020; font-size:.85rem; margin-top:4px; }
        a { display:block; text-align:center; margin-top:12px; color:#1a1a2e; }
    </style>
</head>
<body>
    <div class="caja">
        <h2>Registrar nueva ruta</h2>

        <form action="{{ route('neira.rutas.guardar') }}" method="POST">
            @csrf

            <label>Ciudad de origen:</label>
            <select name="origen_id" required>
                <option value="">-- Seleccione origen --</option>
                @foreach($destinos as $destino)
                    <option value="{{ $destino->id }}" {{ old('origen_id') == $destino->id ? 'selected' : '' }}>
                        {{ $destino->ciudad }}
                    </option>
                @endforeach
            </select>
            @error('origen_id') <div class="error">{{ $message }}</div> @enderror

            <label>Ciudad de destino:</label>
            <select name="destino_id" required>
                <option value="">-- Seleccione destino --</option>
                @foreach($destinos as $destino)
                    <option value="{{ $destino->id }}" {{ old('destino_id') == $destino->id ? 'selected' : '' }}>
                        {{ $destino->ciudad }}
                    </option>
                @endforeach
            </select>
            @error('destino_id') <div class="error">{{ $message }}</div> @enderror

            <label>Distancia aproximada (km):</label>
            <input type="number" step="0.01" min="0.1" name="distancia" value="{{ old('distancia') }}" required>
            @error('distancia') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Guardar ruta</button>
        </form>

        <a href="{{ route('neira.rutas.listar') }}">Ver listado de rutas</a>
    </div>
</body>
</html>