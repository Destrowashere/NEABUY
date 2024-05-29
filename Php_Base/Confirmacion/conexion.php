<?php
$conex = mysqli_connect("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo");


if ($conex->connect_error) {
    die("La conexión a la base de datos falló: " . $conex->connect_error);
}


$conex->set_charset("utf8");

?>
