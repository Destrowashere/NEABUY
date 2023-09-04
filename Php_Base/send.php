<?php

    include("conexcion.php");

    if(isset($_POST["send"])) {

        if(
            strlen($_POST["name"]) >= 1 &&
            strlen($_POST["password"]) >= 1 &&
            strlen($_POST["email"]) >= 1 &&
            strlen($_POST["phone"]) >= 1
        ) {
            $name = trin($_POST["name"]);
            $password = trin($_POST["password"]);
            $email = trin($_POST["email"]);
            $phone = trin($_POST["phone"]);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO cliente(Nombre, contraseña, Correo, Telefono, Fecha)
                        VALUES('$name', '$password', '$email', '$phone', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);  
            if($resultado) {
                ?>
                    <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else{
                ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else{
            ?>
                    <h3 class="success">Llena todos los campos</h3>
                <?php
        }


}

?>