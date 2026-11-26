<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos disponibles</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; max-width: 700px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #2c3e50; color: #fff; }
    </style>
</head>
<body>
    <h1>Vehículos disponibles para viajes</h1>

    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->capacidad }} pasajeros</td>
                    <td>{{ ucfirst($vehiculo->estado) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay vehículos disponibles en este momento.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</blade.php>