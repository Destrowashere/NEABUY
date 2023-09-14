<?php
  
       include_once('conexcrudd.php');

        $id = $_POST['id'];
        $nombre = $_POST['Nombre'];
        $precio = $_POST['Precio'];
        $descripcion = $_POST['Descripcion'];
    
        $sql = "UPDATE producto SET Nombre='$nombre', Precio='$precio', Descripcion='$descripcion' WHERE Id_Producto='$id'";
 



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>
