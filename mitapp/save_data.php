<?php
// Configuración de la conexión a la base de datos
$conn = mysqli_connect("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo");

// Verificar conexión
if ($conn->connect_error) {
    error_log("Conexión fallida: " . $conn->connect_error, 3, "error_log.txt");
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$info = isset($_POST['info']) ? $_POST['info'] : '';
$precio = isset($_POST['precio']) ? $_POST['precio'] : '';

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$tipo = $conn->real_escape_string($tipo);
$info = $conn->real_escape_string($info);
$precio = $conn->real_escape_string($precio);

// Insertar datos en la base de datos
$sql = "INSERT INTO mit (nombre, tipo, info, precio) VALUES ('$nombre', '$tipo', '$info', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
} else {
    error_log("Error: " . $sql . " - " . $conn->error, 3, "error_log.txt");
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
