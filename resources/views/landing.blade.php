<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raúl Rosales R. - Artes Visuales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>
    <header class="bg-dark text-white text-center py-5">
        <h1>Raúl Rosales R.</h1>
        <p>Profesor de Artes Visuales</p>
        <!-- Redes Sociales -->
        <div class="d-flex justify-content-center mt-3">
            <a href="https://www.instagram.com/artenlaclase" target="_blank" class="text-white mx-3">
                <i class="bi bi-instagram fs-4"></i>
            </a>
            <a href="https://www.facebook.com/artenlaclase" target="_blank" class="text-white mx-3">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.youtube.com/@artenlaclase" target="_blank" class="text-white mx-3">
                <i class="bi bi-youtube fs-4"></i>
            </a>
            <a href="https://www.linkedin.com/in/raulrosalesrebolledo/" target="_blank" class="text-white mx-3">
                <i class="bi bi-linkedin fs-4"></i>
            </a>
        </div>
    </header>

    <main class="container my-5 ">
        <!-- Descripción -->
        <section id="about" class="mb-5 min-vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Imagen en el lado izquierdo -->
                    <div class="col-md-4 mb-3 d-flex align-items-center">
                        <img src="{{ asset('img/raulRosales.jpg') }}" alt="Raúl Rosales" class="img-fluid rounded h-100 object-fit-cover">
                    </div>
                    <!-- Texto en el lado derecho -->
                    <div class="col-md-6 text-center mt-md-0 mt-4">
                        <h2>Sobre mí</h2>
                        <p>
                            Soy especialista en Educación Artística con 19 años de experiencia en centros educativos, donde he diseñado e implementado asignaturas como Artes Visuales, Tecnología, y talleres de Audiovisual, Proyectos Tecnológicos y Programación. Además, cuento con experiencia como administrador y programador de sitios web para instituciones educativas, optimizando su funcionalidad y accesibilidad. Durante 3 años, fui responsable en colegios del proyecto Enlaces del Ministerio de Educación, donde configuré y administré laboratorios de computación, integrando tecnología educativa para mejorar la enseñanza y el aprendizaje.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Galería -->
        <section id="gallery" class="mb-5">
            <!-- Título con más espacio -->
            <h2 class="text-center my-5">Galería de trabajos</h2>

            <div class="row">
                <!-- Primera imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">

                    <a href="{{ route('gallery.cine') }}">
                        <img src="/img/cine_escolar (1).jpg" alt="Cine escolar" class="img-fluid">

                        <p class="mt-2">Cine escolar</p>
                    </a>
                </div>

                <!-- Segunda imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">
                    <a href="{{ route('gallery.actividades') }}">
                        <img src="/img/escultura_geometrica1.jpg" alt="Escultura geométrica" class="img-fluid">

                        <p class="mt-2">Actividades didácticas: Educación Artística </p>
                    </a>
                </div>

                <!-- Tercera imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">
                    <a href="{{ route('gallery.trabajo') }}">
                        <img src="/img/Trabajo_en_equipo.jpg" alt="Trabajo en equipo" class="img-fluid">

                        <p class="mt-2">Planificación y Metodología</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contact" class="text-center">
            <h2>Contáctame</h2>

            @if(session('success'))
            <div class="alert alert-success w-50 mx-auto">
                {{ session('success') }}
            </div>
            @endif

            <!-- Errores de validación -->
            @if($errors->any())
            <div class="alert alert-danger w-50 mx-auto">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Formulario -->
            <form action="/contact" method="POST" class="w-50 mx-auto">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Tu nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Tu correo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <textarea name="message" placeholder="Tu mensaje" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </section>
    </main>

    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Raúl Rosales R. - Todos los derechos reservados.</p>
        <div class="d-flex justify-content-center mt-2">
            <a href="https://www.instagram.com/artenlaclase" target="_blank" class="text-dark mx-2">
                <i class="bi bi-instagram fs-4"></i>
            </a>
            <a href="https://www.facebook.com/artenlaclase" target="_blank" class="text-dark mx-2">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.youtube.com/@artenlaclase" target="_blank" class="text-dark mx-2">
                <i class="bi bi-youtube fs-4"></i>
            </a>
            <a href="https://www.linkedin.com/in/raulrosalesrebolledo/" target="_blank" class="text-dark mx-2">
                <i class="bi bi-linkedin fs-4"></i>
            </a>
        </div>
    </footer>
</body>

</html>