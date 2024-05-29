<?php

$conex = mysqli_connect("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo");


if (!$conex) {
    die("Error en la conexión: " . mysqli_connect_error());
}


$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
$email = $_POST['email'];
$role = $_POST['role'];


$sql = "INSERT INTO administradores (username, password, email, role) VALUES ('$username', '$password', '$email', '$role')";

if (mysqli_query($conex, $sql)) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar usuario: " . mysqli_error($conex);
}


mysqli_close($conex);
?>
