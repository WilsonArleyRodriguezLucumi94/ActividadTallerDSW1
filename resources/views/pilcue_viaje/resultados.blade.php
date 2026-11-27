<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Viajes - RF09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Resultados de Búsqueda</h4>
                <a href="{{ route('pilcue.viajes.consultar.formulario') }}" class="btn btn-light btn-sm">Nueva Consulta</a>
            </div>
            <div class="card-body">
                <p class="lead">
                    Viajes disponibles hacia <strong>{{ ucfirst($destino) }}</strong> para la fecha 
                    <strong>{{ \Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</strong>.
                </p>

                @if($viajes->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th>Ruta (Origen - Destino)</th>
                                    <th>Vehículo</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($viajes as $viaje)
                                    <tr>
                                        <td>
                                            {{ \Carbon\Carbon::parse($viaje->fecha)->format('d/m/Y') }} <br>
                                            <small class="text-muted">{{ $viaje->hora }}</small>
                                        </td>
                                        <td>
                                            {{ $viaje->ruta->ciudad_origen ?? 'N/A' }} 
                                            <i class="bi bi-arrow-right"></i> 
                                            {{ $viaje->ruta->ciudad_destino ?? 'N/A' }}
                                        </td>
                                        <td>
                                            {{ $viaje->vehiculo->placa ?? 'N/A' }} 
                                            ({{ $viaje->vehiculo->tipo ?? 'N/A' }})
                                        </td>
                                        <td class="text-success fw-bold">
                                            ${{ number_format($viaje->precio, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            
                                            <button class="btn btn-sm btn-primary">Seleccionar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-warning text-center" role="alert">
                        No se encontraron viajes disponibles para los criterios seleccionados.
                    </div>
                @endif
            </div>
            <div class="card-footer text-muted text-end">
                <small></small>
            </div>
        </div>
    </div>
</body>
</html>