<?php

include('conexion.php'); 


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE Nombre = '$username'";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['contraseña'])) {
        
        header("index.html");
        exit();
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
