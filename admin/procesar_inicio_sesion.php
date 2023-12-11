<?php
session_start();


$conex = mysqli_connect("localhost", "root", "", "nearbuybonitoo");


if (!$conex) {
    die("Error en la conexión: " . mysqli_connect_error());
}


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM administradores WHERE username='$username'";
$resultado = mysqli_query($conex, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    if (password_verify($password, $fila['password'])) {
        $_SESSION['username'] = $username;
        echo "Inicio de sesión exitoso";
 
         header('Location: adminsite/index.html');
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}


mysqli_close($conex);
?>
