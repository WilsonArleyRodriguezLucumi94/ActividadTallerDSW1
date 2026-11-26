<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Tickets')</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #EEF2F0; color: #123A4A; margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 24px; }
        .ticket { width: min(520px, 100%); background: #fff; border-radius: 6px; padding: 32px; box-sizing: border-box; }
        h1 { font-size: 1.6rem; margin: 0 0 16px; }
        .campo { display: grid; gap: 6px; margin-bottom: 18px; }
        label { font-weight: 600; }
        select, input { font: inherit; padding: 10px; border: 1px solid #B9C9CF; border-radius: 4px; }
        .error { color: #A33A2B; margin: 0; font-size: .9rem; }
        .exito { background: #E3F1E8; padding: 12px; border-radius: 4px; margin-bottom: 18px; }
        .aviso { background: #FBF1E3; padding: 12px; border-radius: 4px; margin-bottom: 18px; }
        .separador { border: 0; border-top: 2px dashed #B9C9CF; margin: 24px -32px; }
        button, .boton { display: block; width: 100%; box-sizing: border-box; padding: 12px; background: #123A4A; color: #fff; border: 0; border-radius: 4px; font: inherit; font-weight: 600; text-align: center; text-decoration: none; cursor: pointer; }
        .resumen { display: grid; grid-template-columns: max-content 1fr; gap: 10px 18px; }
        .resumen dt { color: #4B6470; }
        .resumen dd { margin: 0; font-weight: 600; }
    </style>
</head>
<body>
    <main class="ticket">
        @yield('contenido')
    </main>
</body>
</html>