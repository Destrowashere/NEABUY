<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "usuario_db", "contraseña_db", "nombre_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Realizar una consulta a la base de datos
$consulta = "SELECT * FROM tabla";
$resultado = $conexion->query($consulta);

// Procesar los resultados y mostrarlos en la página HTML
while ($fila = $resultado->fetch_assoc()) {
    echo "Nombre: " . $fila["nombre"] . "<br>";
    echo "Email: " . $fila["email"] . "<br>";
    // ... Mostrar otros campos aquí ...
    echo "<br>";
}

// Cerrar la conexión
$conexion->close();
?>
