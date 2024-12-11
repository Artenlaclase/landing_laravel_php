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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.cine') }}">Cine Escolar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.actividades') }}">Actividades Didácticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.trabajo') }}">Trabajo en Equipo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Proyecto Artes Visuales</p>
    </footer>
</body>
</html>