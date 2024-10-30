<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Fleita</title>
    <link rel="stylesheet" href="df_estilos/df_estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>

    <h1>Inmobiliaria Fleita</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?df_modulo=df_propiedades">Propiedades</a></li>
                <li><a href="index.php?df_modulo=df_quienes_somos">Quienes Somos</a></li>
                <li><a href="index.php?df_modulo=df_contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['df_modulo'])) {
            $modulo = $_GET['df_modulo'];
            switch ($modulo) {
                case 'df_propiedades':
                    include 'df_modulo/df_propiedades.php';
                    break;
                case 'df_quienes_somos':
                    include 'df_modulo/df_quienes_somos.php';
                    break;
                case 'df_contacto':
                    include 'df_modulo/df_contacto.php';
                    break;
                default:
                    include 'index.php';
            }
        } else {
        ?>
            <h2>Encantados de ayudarte a encontrar tu vivienda soñada</h2>
            <h3>En Inmobiliaria Fleita, transformamos el sueño de encontrar tu hogar ideal en una experiencia única y personalizada. Nos comprometemos a guiarte en cada paso del camino, ofreciendo propiedades que se ajustan a tus necesidades y estilo de vida.</h3>

            <!-- Sección Rotador/Carrusel -->
            <section class="carrusel">
                <div class="carrusel-container">
                    <div class="carrusel-imagenes">
                        <img src="df_imagenes/df_propiedad1.jpg" alt="Imagen 1">
                        <img src="df_imagenes/df_propiedad2.jpg" alt="Imagen 2">
                        <img src="df_imagenes/df_propiedad3.jpg" alt="Imagen 3">
                        <img src="df_imagenes/df_propiedad4.jpg" alt="Imagen 4">
                        <img src="df_imagenes/df_propiedad5.jpg" alt="Imagen 5">
                        <img src="df_imagenes/df_propiedad6.jpg" alt="Imagen 6">
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Agencia Inmobiliaria. Todos los derechos reservados.</p>
    </footer>

    <script src="df_js/df_carrusel.js"></script>
</body>
</html>
