<?php

session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use MyProject\Database;
use MyProject\User;

$conex = new Database("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo");
$user = new User($conex);

$error_message = "";
if (!empty($_POST["submit"])) {
    if (empty($_POST["Correo"]) || empty($_POST["contrasena"])) {
        $error_message = "Por favor complete todos los campos.";
    } else {
        $correo = $_POST["Correo"];
        $contrasena = $_POST["contrasena"];

        $user_data = $user->validateUser($correo, $contrasena);

        if ($user_data) {
            $_SESSION['usuario_nombre'] = $user_data['Correo'];
            $_SESSION['usuario_apellido'] = $user_data['contrasena'];
            header("location:../AparProdu/index.html");
            exit();
        } else {
            $error_message = "Correo o contraseña incorrectos.";
        }
    }
}

if ($error_message) {
    echo "<div class='error-message'>
            <p>{$error_message}</p>
            <a href='inici.html'>Volver a intentar</a>
          </div>";
}
?>
