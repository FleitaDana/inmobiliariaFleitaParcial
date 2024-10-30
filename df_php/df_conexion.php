<?php
// Especifica el nombre del servidor donde está alojada la base de datos.

$servername = "localhost";  // "localhost" se refiere a que la base de datos está en el mismo servidor que el script PHP.


$username = "root";         // Nombre de usuario de MySQL


$password = "root";         // Contraseña de MySQL


$dbname = "inmobiliariafleita";  // Nombre de tu base de datos


$port = 3306;               // Puerto de MySQL

// Crear una nueva conexión a la base de datos usando los parámetros definidos.
global $con;
$con = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar si la conexión fue exitosa.
// Si hay un error de conexión, se detiene el script y muestra un mensaje de error.
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

// Establecer el conjunto de caracteres para la conexión, lo que ayuda a manejar correctamente acentos y caracteres especiales.
$con->set_charset("utf8");
?>
