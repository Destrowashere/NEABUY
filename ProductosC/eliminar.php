<?php
  
       include_once('conexcrudd.php');

       $id = $_GET['Id'];


       $sql = "DELETE FROM producto WHERE Id_Producto = '$id'";



       $query = mysqli_query($conex,$sql);

       if($query){
        header('location:crud.php');
       }
       ?>