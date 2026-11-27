<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Destinos - Edinson Fernandez</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .alert { padding: 10px; background-color: #d4edda; color: #155724; margin-bottom: 15px; }
        .btn-editar { background: #ffc107; color: #000; padding: 5px 10px; text-decoration: none; border-radius: 4px; }
        .btn-eliminar { background: #dc3545; color: #fff; border: none; padding: 6px 10px; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Listado de Destinos Registrados (RF04)</h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="padding: 10px; background-color: #f8d7da; color: #721c24; margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($destinos as $destino)
                <tr>
                    <td>{{ $destino->id }}</td>
                    <td>{{ $destino->ciudad }}</td>
                    <td>{{ $destino->descripcion }}</td>
                    <td>
                        <a href="{{ route('fernandez.destinos.editar', $destino->id) }}" class="btn-editar">Modificar</a>

                        <form action="{{ route('fernandez.destinos.eliminar', $destino->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Seguro que deseas eliminar este destino?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay destinos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>