<?php
  
       include_once('conexcrud.php');

       $id = $_GET['Id'];


       $sql = "DELETE FROM clientes WHERE id_Cliente = '$id'";



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>