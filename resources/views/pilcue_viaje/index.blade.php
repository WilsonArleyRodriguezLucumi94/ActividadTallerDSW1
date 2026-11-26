<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Viajes - RF09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Consultar Viajes Disponibles (RF09)</h4>
                <small>Código desarrollado por Esteban Pilcue</small>
            </div>
            <div class="card-body">
                <form action="{{ route('pilcue.viajes.consultar.resultados') }}" method="GET">
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="destino" class="form-label">Ciudad de Destino</label>
                            <input type="text" class="form-control" id="destino" name="destino" 
                                   placeholder="Ej: Cali, Bogotá, Palmira" required>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="fecha" class="form-label">Fecha del Viaje</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="col-md-2 d-flex align-items-end mb-3">
                            <button type="submit" class="btn btn-success w-100">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>