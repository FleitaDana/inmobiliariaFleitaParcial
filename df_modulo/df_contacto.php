<?php

include 'df_php/df_conexion.php';


$success_message = '';
$error_message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $con->real_escape_string(trim($_POST['nombre']));
    $apellido = $con->real_escape_string(trim($_POST['apellido']));
    $email = $con->real_escape_string(trim($_POST['email']));
    $telefono = $con->real_escape_string(trim($_POST['telefono']));
    $mensaje = $con->real_escape_string(trim($_POST['mensaje']));


    $sql = "INSERT INTO contacto (nombre, apellido, email, telefono, mensaje) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$mensaje')";


    if ($con->query($sql) === TRUE) {
        $success_message = "Mensaje enviado exitosamente.";
    } else {
        $error_message = "Error al enviar el mensaje: " . $con->error;
    }


    $con->close();

    echo "<script type='text/javascript'>alert('" . ($success_message ?: $error_message) . "');</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Inmobiliaria Fleita</title>
    <link rel="stylesheet" href="df_estilos.css">
</head>
<body>

    <section class="contacto-container">
        <h2>Contacto</h2>

        <form id="contacto-form" action="index.php?df_modulo=df_contacto" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </section>

</body>
</html>
