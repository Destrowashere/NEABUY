<?php
include_once('conexcrud.php');

$id = $_GET['Id'];


$sql_delete_roles = "DELETE FROM roles WHERE id_Cliente = '$id'";
$query_delete_roles = mysqli_query($conex, $sql_delete_roles);

if ($query_delete_roles) {
   
    $sql_delete_clientes = "DELETE FROM clientes WHERE id_Cliente = '$id'";
    $query_delete_clientes = mysqli_query($conex, $sql_delete_clientes);

    if ($query_delete_clientes) {
        header('location:crud.php');
    }
}
?>
