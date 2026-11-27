<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos - RF05</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 6px 12px; background: #2c3e50; color: white; text-decoration: none; border-radius: 4px; }
        .alerta { padding: 10px; background: #d4edda; color: #155724; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h2>Listado de Vehículos</h2>
    <a href="{{ route('henao.vehiculos.create') }}" class="btn">Registrar nuevo vehículo</a>

    @if(session('mensaje'))
        <p class="alerta">{{ session('mensaje') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->id }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->capacidad }}</td>
                    <td>{{ $vehiculo->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
