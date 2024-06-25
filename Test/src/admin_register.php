<?php
function conectarBD() {
    // Cambiar las credenciales según tu entorno de desarrollo
    $conex = mysqli_connect("sql305.infinityfree.com", "if0_36548430", "VDYd0Ykr6H4i", "if0_36548430_nearbuybonitoo");
    if (!$conex) {
        die("Error en la conexión: " . mysqli_connect_error());
    }
    return $conex;
}

function registrarAdministrador($username, $password, $email, $role) {
    $conex = conectarBD();

    // Hash de la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Escapar variables para prevenir inyección SQL
    $username = mysqli_real_escape_string($conex, $username);
    $email = mysqli_real_escape_string($conex, $email);
    $role = mysqli_real_escape_string($conex, $role);

    $sql = "INSERT INTO administradores (username, password, email, role) VALUES ('$username', '$hashedPassword', '$email', '$role')";

    if (mysqli_query($conex, $sql)) {
        return "Registro exitoso";
    } else {
        return "Error al registrar usuario: " . mysqli_error($conex);
    }

    mysqli_close($conex);
}

// Procesar el registro si se ha enviado el formulario
if (!empty($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $resultado = registrarAdministrador($username, $password, $email, $role);
    echo $resultado;
}
?>
