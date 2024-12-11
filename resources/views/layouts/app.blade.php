<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galería de Artes Visuales')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('gallery.cine') }}">Cine Escolar</a>
            <a href="{{ route('gallery.escultura') }}">Escultura</a>
            <a href="{{ route('gallery.trabajo') }}">Trabajo en Equipo</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 Proyecto Artes Visuales</p>
    </footer>
</body>
</html>
