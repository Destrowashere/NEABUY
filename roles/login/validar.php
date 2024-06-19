<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "nearbuybonitoo");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error de conexión a MySQL: " . mysqli_connect_error();
    exit();
}

$consulta = "SELECT claves.id_Cliente, roles.Rol FROM claves 
             INNER JOIN roles ON claves.id_Cliente = roles.id_Cliente
             WHERE Correo='$usuario' AND contrasena='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

// Verificar si hay errores de consulta
if (!$resultado) {
    echo "Error de consulta: " . mysqli_error($conexion);
    exit();
}

if (mysqli_num_rows($resultado) > 0) {
    $filas = mysqli_fetch_array($resultado);
    if ($filas) {
        $rol = $filas['Rol'];
        switch ($rol) {
            case 'administrador':
                header("location: admin.php");
                exit();
            case 'cliente':
                header("location: ../indexuse.html");
                exit();
            case 'tendero':
                header("location: tendero.php");
                exit();
            case 'repartidor':
                header("location: repartidor.php");
                exit();
            default:
                // Manejar cualquier otro rol aquí
                break;
        }
    }
}

// Si no se encontraron coincidencias o ocurrió algún otro problema, mostrar el mensaje de error
include("index.html");
?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
