<?php
  
       include_once('conexcrud.php');

       $id = $_POST['id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
       
        $direccion = $_POST['Direccion'];
        $telefono = $_POST['Telefono'];
        $cedula = $_POST['Cedula'];


        $sql = "UPDATE clientes SET Nombre='$nombre', Apellido='$apellido', Direccion='$direccion',
        Telefono='$telefono', Cedula='$cedula' WHERE id_Cliente='$id'";
 



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>
