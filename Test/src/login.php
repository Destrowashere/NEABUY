<?php
session_start();
require_once 'Database.php';

function conectarBD() {
    return new Database("localhost", "root", "", "nearbuybonitoo");
}

function validarUsuario($db, $correo, $contrasena) {
    $query = "SELECT * FROM claves WHERE Correo = ?";
    $result = $db->query($query, ['s', $correo]);

    if ($result && $result->numRows() > 0) {
        $row = $result->fetchAssoc();
        $hashedPassword = $row['contrasena'];
        return password_verify($contrasena, $hashedPassword) ? $row : null;
    }
    return null;
}

function procesarLogin($postData) {
    $error_message = "";

    if (empty($postData["Correo"]) || empty($postData["contrasena"])) {
        $error_message = "Por favor complete todos los campos.";
    } else {
        $db = conectarBD();
        $correo = $postData["Correo"];
        $contrasena = $postData["contrasena"];
        $usuario = validarUsuario($db, $correo, $contrasena);

        if ($usuario) {
            $_SESSION['usuario_nombre'] = $usuario['Correo'];
            $_SESSION['usuario_apellido'] = $usuario['contrasena'];
            header("location:../AparProdu/index.html");
            exit();
        } else {
            $error_message = "Correo o contraseña incorrectos.";
        }
    }
    return $error_message;
}

if (!empty($_POST["submit"])) {
    $error_message = procesarLogin($_POST);
    if ($error_message) {
        echo "<div class='error-message'><p>$error_message</p><a href='inici.html'>Volver a intentar</a></div>";
    }
}
?>
