<?php 

session_start();

$conexion = new mysqli("localhost", "root", "", "neabuybonito");

$error_message = "";

if (!empty($_POST["submit"])) {
    if (empty($_POST["Correo"]) || empty($_POST["contrasena"])) {
        $error_message = "CAMPOS VACIOS";
    } else {
        $correo = $_POST["Correo"];
        $contrasena = $_POST["contrasena"];
        

        $query = "SELECT * FROM claves WHERE Correo ='$correo'";
        $result = $conexion->query($query);

        if ($result !== false) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hashedPassword = $row['contrasena'];

                if (password_verify($contrasena, $hashedPassword)) {
                    $_SESSION['usuario_nombre'] = $row['correo'];
                    $_SESSION['usuario_apellido'] = $row['contrasena'];
                    header("location:../index.html");
                    exit();
                } else {
                    $error_message = "Contraseña incorrecta";
                }
            } else {
                $error_message = "Usuario no existe";
            }
        } else {
            $error_message = "Error en la consulta: " . $conexion->error;
        }
    }
}
?>

        

