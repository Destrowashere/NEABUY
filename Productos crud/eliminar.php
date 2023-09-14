<?php
  
       include_once('conexcrud.php');

       $id = $_GET['Id'];


       $sql = "DELETE FROM producto WHERE id_Producto = '$id'";



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>