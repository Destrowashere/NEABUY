<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Configuración de la conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "nearbuybonitoo");

// Verificar conexión
if ($conn->connect_error) {
    error_log("Conexión fallida: " . $conn->connect_error, 3, "error_log.txt");
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = '';
$tipo_product = '';
$info_product = '';
$precio_product = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $tipo_product = isset($_POST['tipo_product']) ? $_POST['tipo_product'] : '';
    $info_product = isset($_POST['info_product']) ? $_POST['info_product'] : '';
    $precio_product = isset($_POST['precio_product']) ? $_POST['precio_product'] : '';
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    $tipo_product = isset($_GET['tipo_product']) ? $_GET['tipo_product'] : '';
    $info_product = isset($_GET['info_product']) ? $_GET['info_product'] : '';
    $precio_product = isset($_GET['precio_product']) ? $_GET['precio_product'] : '';
}

// Imprimir datos recibidos para depuración
error_log("Datos recibidos - Nombre: $nombre, Tipo: $tipo_product, Info: $info_product, Precio: $precio_product", 3, "debug_log.txt");

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$tipo_product = $conn->real_escape_string($tipo_product);
$info_product = $conn->real_escape_string($info_product);
$precio_product = $conn->real_escape_string($precio_product);

// Insertar datos en la base de datos
$sql = "INSERT INTO mitappnb (nombre, tipo_product, info_product, precio_product) VALUES ('$nombre', '$tipo_product', '$info_product', '$precio_product')";

// Imprimir consulta SQL para depuración
error_log("Consulta SQL: $sql", 3, "debug_log.txt");

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
} else {
    error_log("Error: " . $sql . " - " . $conn->error, 3, "error_log.txt");
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
