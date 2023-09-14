<?php
     
     include_once('conexcrud.php');


     $Nombre= $_POST['Nombre'];
     $precio= $_POST['Precio'];
     $descripcion= $_POST['Descripcion'];
     $sql="INSERT INTO producto(Nombre,Precio,Descripcion) VALUES('$Nombre','$precio','$descripcion')";


     $query = mysqli_query($conex,$sql);

     if($query === TRUE){
        header("location:crud.php");
     }