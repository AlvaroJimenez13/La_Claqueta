<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu Aplicación</title>
    <!-- Carga de estilos CSS, Bootstrap, u otros -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    @yield('content')
</div>
<!-- Carga de scripts JavaScript, Bootstrap, u otros -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
