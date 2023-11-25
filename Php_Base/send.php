<?php
include("conexion.php");

if(isset($_POST["send"])){

    if(
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["lastname"]) >= 1 &&
        strlen($_POST["password"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["phone"]) >= 1
    ):
        $name = trim($_POST["name"]);
        $lastname = trim($_POST["lastname"]);
        $password = trim($_POST["password"]);
        $Cedula = trim($_POST["cedula"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $direct = trim($_POST["direct"]);
        $fecha = date("y/m/d");
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6LcXxxspAAAAAFiywT5zTbc3tpGpGqi7hcoZLPgI";

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

        $atributos = json_decode($respuesta, TRUE);

        if(empty($_POST['g-recaptcha-response'])){
            $errors[] = 'Verificar Captcha';
        }

        if(!$atributos['success']){
            $errors[]= 'Verificar Captcha';
        }

        $contrasena_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
        $consulta1 = "INSERT INTO clientes (id_Cliente, Nombre, Apellido, Telefono, Direccion, Fecha, Cedula)
                    VALUES ('', '$name', '$lastname',  '$phone', '$direct', '$fecha', '$Cedula')";
        $resultado1 = mysqli_query($conex, $consulta1);
        
        if($resultado1):
            $id_cliente = mysqli_insert_id($conex);
            
            $consulta2 = "INSERT INTO claves (id_Cliente, Correo, Contrasena)
                        VALUES ('$id_cliente', '$email', '$contrasena_encriptada')";
            $resultado2 = mysqli_query($conex, $consulta2);
        
            if($resultado2):
                $rol_seleccionado = $_POST["role"]; 
                $consulta3 = "INSERT INTO roles (id_Cliente, Rol)
                            VALUES ('$id_cliente', '$rol_seleccionado')";
                $resultado3 = mysqli_query($conex, $consulta3);
                
                if($resultado3):
                    ?>
                    <h3 class="success">Tu registro se ha completado</h3>
                    <?php
                else:
                    ?>
                    <h3 class="error">Ocurrió un error al insertar el rol</h3>
                    <?php
                endif;
            else:
                ?>
                <h3 class="error">Ocurrió un error al insertar la clave</h3>
                <?php
            endif;
        else:
            ?>
            <h3 class="error">Ocurrió un error al insertar el cliente</h3>
            <?php
        endif;
    endif;
}
?>
