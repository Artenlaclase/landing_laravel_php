<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raúl Rosales R. - Artes Visuales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="bg-dark text-white text-center py-5">
        <h1>Raúl Rosales R.</h1>
        <p>Profesor de Artes Visuales</p>
    </header>

    <main class="container my-5">
        <!-- Descripción -->
        <section id="about" class="text-center mb-5">
            <h2>Sobre mí</h2>
            <p>
                Soy Raúl Rosales R., profesor de Artes Visuales con amplia experiencia en enseñar técnicas de pintura, dibujo y diseño gráfico.
            </p>
        </section>

        <!-- Galería -->
        <section id="gallery" class="mb-5">
            <h2 class="text-center">Galería de trabajos</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="/img/cine_escolar (1).jpg" alt="cine escolar" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="/img/escultura_geometrica1.jpg" alt="Artes visuales" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="/img/Trabajo_en_equipo.jpg" alt="Trabajo 3" class="img-fluid">
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
    </footer>
</body>

</html>