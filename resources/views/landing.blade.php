<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Raúl Rosales R. - Artes Visuales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>
    <header class="bg-dark text-white text-center py-5 ">
        <h1 class="mt-5">Raúl Rosales R.</h1>
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


    <nav class="d-flex justify-content-center mt-3  fixed-top mt-0 pt-0">
        <ul class="list-unstyled d-flex">
            <li class="mx-3">
                <a href="#about" class="btn btn-outline-secondary">Acerca de</a>
            </li>
            <li class="mx-3">
                <a href="#gallery" class="btn btn-outline-secondary">Portfolio</a>
            </li>
            <li class="mx-3">
                <a href="#contact" class="btn btn-outline-secondary">Contáctame</a>
            </li>
        </ul>
    </nav>
    <main class="container my-5 pt-1 mt-1">
        <!-- Descripción -->
        <section id="about" class="text-center d-flex align-items-center justify-content-center" style="min-height: 80vh;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Imagen en el lado izquierdo -->
                    <div class="col-md-4 mb-3 d-flex align-items-center">
                        <img src="{{ asset('img/raulRosales.jpg') }}" alt="Raúl Rosales" class="img-fluid rounded h-100 object-fit-cover">
                    </div>
                    <!-- Texto en el lado derecho -->
                    <div class="col-md-6 text-center mt-md-0 pt-md-0">
                        <h2>Sobre mí</h2>
                        <p>
                            Soy especialista en Educación Artística con 19 años de experiencia en centros educativos, donde he diseñado e implementado asignaturas como Artes Visuales, Tecnología, y talleres de Audiovisual, Proyectos Tecnológicos y Programación. Además, cuento con experiencia como administrador y programador de sitios web para instituciones educativas, optimizando su funcionalidad y accesibilidad. Durante 3 años, fui responsable en colegios del proyecto Enlaces del Ministerio de Educación, donde configuré y administré laboratorios de computación, integrando tecnología educativa para mejorar la enseñanza y el aprendizaje.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Galería -->
        <section id="gallery" class="mb-5 min-vh-100 d-flex flex-column justify-content-center " style="background-color: #f8f9fa; ">
            <h2 class="text-center my-5 ">Portfolio</h2>

            <div class="row">
                <!-- Primera imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">
                    <a href="{{ route('gallery.cine') }}" class="text-dark text-decoration-none">
                        <img src="/img/cine_escolar (1).jpg" alt="Cine escolar" class="img-fluid">
                        <h3 class="mt-2">Cine escolar</h3>
                    </a>
                </div>

                <!-- Segunda imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">
                    <a href="{{ route('gallery.actividades') }}" class="text-dark text-decoration-none">
                        <img src="/img/escultura_geometrica1.jpg" alt="Escultura geométrica" class="img-fluid">
                        <h3 class="mt-2">Didáctica </h3>
                    </a>
                </div>

                <!-- Tercera imagen con texto debajo -->
                <div class="col-md-4 mb-4 text-center">
                    <a href="{{ route('gallery.trabajo') }}" class="text-dark text-decoration-none">
                        <img src="/img/Trabajo_en_equipo.jpg" alt="Trabajo en equipo" class="img-fluid">
                        <h3 class="mt-2">Gestión</h3>
                    </a>
                </div>
            </div>
        </section>

        <!-- Contacto text-center d-flex align-items-center justify-content-center" style="min-height: 80vh; -->
        <section id="contact" class="text-center d-flex align-items-center justify-content-center" style="min-height: 80vh;">
            <div class="container px-4 px-md-6">
                <div class="d-flex flex-column align-items-center text-center">
                    <div class="mb-4">
                        <h2 class="fw-bold display-5">Contáctame</h2>
                        <p class="mx-auto text-muted fs-5" style="max-width: 700px;">
                            Ponte en contacto conmigo para más información sobre clases y talleres.
                        </p>
                    </div>
                    <div class="w-100" style="max-width: 400px;">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope fs-5 me-2"></i>
                            <span>profesor@email.com</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-telephone fs-5 me-2"></i>
                            <span>+34 123 456 789</span>
                        </div>
                        <a href="mailto:profesor@email.com" class="btn btn-primary w-100">Solicitar información</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center py-3 bg-light mt-auto">
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