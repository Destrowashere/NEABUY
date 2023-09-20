<?php
include("conexion.php");

if(isset($_POST["send"])){

    if(
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["lastname"]) >= 1 &&
        strlen($_POST["password"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["phone"]) >= 1
    ){
        $name = trim($_POST["name"]);
        $lastname = trim($_POST["lastname"]);
        $password = trim($_POST["password"]);
        $Cedula = trim($_POST["cedula"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $direct = trim($_POST["direct"]);
        $fecha = date("y/m/d");
        
        $contrasena_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
        $consulta = "INSERT INTO clientes (id_Cliente, Nombre, Apellido, Contrasena, Correo, Telefono, Direccion, Fecha, Cedula)
                    VALUES ('', '$name', '$lastname', '$contrasena_encriptada', '$email', '$phone', '$direct', '$fecha', '$Cedula')";
                    
        $resultado = mysqli_query($conex, $consulta);  
        
        if($resultado) {
            ?>
                <h3 class="success">Tu registro se ha completado</h3>
            <?php
        } else{
            ?>
                <h3 class="error">Ocurrió un error</h3>
            <?php
        }
    } else{
        ?>
            <h3 class="success">Llena todos los campos</h3>
        <?php
    }
}
?>
