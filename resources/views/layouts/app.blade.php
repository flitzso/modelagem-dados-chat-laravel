<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Incluir outros estilos necessários -->
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
</body>

</html>