<?php
session_start();
include('conexion.php');

$username = $_POST['Nombre'];
$email = $_POST['Correo'];

$sql = "UPDATE Cliente SET username='$Nombre', email='$Correo' WHERE id='".$_SESSION['id']."'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['Nombre'] = $username;
    $_SESSION['Correo'] = $email;
    header('Location: config.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>