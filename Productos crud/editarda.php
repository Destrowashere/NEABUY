<?php
  
       include_once('conexcrud.php');

       $id = $_POST['id'];
        $nombre = $_POST['Nombre'];
        $precio = $_POST['Precio'];
        $descripcion = $_POST['Descripcion'];
    
        $sql = "UPDATE productos SET Nombre='$nombre', Precio='$precio', Descripcion='$descripcion' WHERE id_Producto='$id'";
 



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>
