<?php
     
     include_once('conexcrud.php');    


     $Nombre= $_POST['Nombre'];
     $Apellido= $_POST['Apellido'];
     $Telefono= $_POST['Telefono'];
     $Direccion= $_POST['Direccion'];
     $Cedula= $_POST['Cedula'];

     $sql="INSERT INTO clientes(Nombre,Apellido,Telefono,Direccion,Cedula) VALUES('$Nombre','$Apellido','$Telefono','$Direccion','$Cedula')";


     $query = mysqli_query($conex,$sql);

     if($query === TRUE){
        header("location:crud.php");
     }