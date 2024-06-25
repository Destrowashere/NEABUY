<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect("localhost", "root", "", "nearbuybonitoo");


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio, imagen)
VALUES ('$nombre', '$descripcion', $cantidad, $precio, '$imagen')";

$response = array();
if ($conn->query($sql) === TRUE) {
    $response = array("success" => true);
} else {
    $response = array("success" => false, "error" => $conn->error);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);

?>
