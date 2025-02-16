<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galería de Artes Visuales')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">


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
                            <a class="nav-link" href="{{ route('gallery.actividades') }}">Didáctica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery.trabajo') }}">Gestión</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-light text-center py-3">
    <p>© 2024 Proyecto Artes Visuales</p>
    <div class="d-flex justify-content-center mt-2">
        <a href="https://www.instagram.com/artenlaclase" target="_blank" class="text-light mx-2">
            <i class="bi bi-instagram fs-4"></i>
        </a>
        <a href="https://www.facebook.com/artenlaclase" target="_blank" class="text-light mx-2">
            <i class="bi bi-facebook fs-4"></i>
        </a>
        <a href="https://www.youtube.com/@artenlaclase" target="_blank" class="text-light mx-2">
            <i class="bi bi-youtube fs-4"></i>
        </a>
        <a href="https://www.linkedin.com/in/raulrosalesrebolledo/" target="_blank" class="text-light mx-2">
            <i class="bi bi-linkedin fs-4"></i>
        </a>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>