<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rutas registradas - RF07</title>
    <style>
        body { font-family: Arial, sans-serif; padding:20px; background:#f4f4f4; }
        .caja { max-width:820px; margin:auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,.15); }
        h2 { text-align:center; color:#1a1a2e; }
        table { width:100%; border-collapse:collapse; margin-top:15px; }
        th, td { border:1px solid #ddd; padding:10px; text-align:left; }
        th { background:#1a1a2e; color:#fff; }
        .ok { background:#d4edda; color:#155724; padding:10px; border-radius:4px; margin-bottom:15px; }
        a.btn { display:inline-block; margin-top:15px; padding:10px 16px; background:#1a1a2e; color:#fff; text-decoration:none; border-radius:4px; }
    </style>
</head>
<body>
    <div class="caja">
        <h2>Listado de rutas</h2>

        @if (session('exito'))
            <div class="ok">{{ session('exito') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ciudad de Origen</th>
                    <th>Ciudad de Destino</th>
                    <th>Distancia (km)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rutas as $ruta)
                    <tr>
                        <td>{{ $ruta->id }}</td>
                        <td>{{ $ruta->origen->ciudad ?? 'Desconocido' }}</td>
                        <td>{{ $ruta->destino->ciudad ?? 'Desconocido' }}</td>
                        <td>{{ number_format($ruta->distancia, 2) }} km</td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center;">No hay rutas registradas.</td></tr>
                @endforelse
            </tbody>
        </table>

        <a class="btn" href="{{ route('neira.rutas.crear') }}">+ Registrar nueva ruta</a>
    </div>
</body>
</html>