<?php

    include("conexion.php");

    if(isset($_POST["send"])){

        if(
            strlen($_POST["name"]) >= 1 &&
            strlen($_POST["buy"]) >= 1 &&
            strlen($_POST["desc"]) >= 1 &&
         
        ){
            $name = trim($_POST["name"]);
            $lastname = trim($_POST["buy"]);
            $password = trim($_POST["desc"]);

           
            $consulta = "INSERT INTO producto( id_Producto, Nombre, Precio, Descripcion)
                        VALUES('','$name','$buy', '$desc')";
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