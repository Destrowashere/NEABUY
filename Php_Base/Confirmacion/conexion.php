<?php
$servername = "localhost"; 
$username = "Nombre";
$password = "Contraseña";
$dbname = "neabuybonitoo";


$conexion = new mysqli($servername, $username, $password, $dbname);


if ($conexion->connect_error) {
    die("La conexión a la base de datos falló: " . $conexion->connect_error);
}


$conexion->set_charset("utf8");

?>
