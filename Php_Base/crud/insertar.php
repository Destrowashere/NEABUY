<?php
     
     include_once('conexcrud.php');


     $Nombre= $_POST['Nombre'];
     $Apellido= $_POST['Apellido'];
     $Correo= $_POST['Correo'];
     $Telefono= $_POST['Telefono'];
     $Direccion= $_POST['Direccion'];
     $Cedula= $_POST['Cedula'];

     $sql="INSERT INTO clientes(Nombre,Apellido,Correo,Telefono,Direccion,Cedula) VALUES('$Nombre','$Apellido','$Correo','$Telefono','$Direccion','$Cedula')";


     $query = mysqli_query($conex,$sql);

     if($query === TRUE){
        header("location:crud.php");
     }