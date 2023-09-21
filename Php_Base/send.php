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
        
        $consulta1 = "INSERT INTO clientes (id_Cliente, Nombre, Apellido, Telefono, Direccion, Fecha, Cedula)
                    VALUES ('', '$name', '$lastname',  '$phone', '$direct', '$fecha', '$Cedula')";
        $resultado1 = mysqli_query($conex, $consulta1);
        
        if($resultado1) {
            $id_cliente = mysqli_insert_id($conex); // Obtener el ID del cliente recién insertado
            
            $consulta2 = "INSERT INTO claves (id_Cliente,  Correo, Contrasena)
                    VALUES ('$id_cliente', '$email', '$contrasena_encriptada')";
            $resultado2 = mysqli_query($conex, $consulta2);
            
            if($resultado2) {
                ?>
                <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else{
                ?>
                <h3 class="error">Ocurrió un error al insertar la clave</h3>
                <?php
            }
        } else{
            ?>
            <h3 class="error">Ocurrió un error al insertar el cliente</h3>
            <?php
        }
    } else{
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>
