<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galería de Artes Visuales')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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