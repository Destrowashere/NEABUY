<?php
     
     include_once('conexcrudd.php');


     $nombre= $_POST['Nombre'];
     $precio= $_POST['Precio'];
     $descripcion= $_POST['Descripcion'];
     $sql="INSERT INTO producto(Nombre,Precio,Descripcion) VALUES('$nombre','$precio','$descripcion')";


     $query = mysqli_query($conex,$sql);

     if($query === TRUE){
        header("location:crud.php");
     }