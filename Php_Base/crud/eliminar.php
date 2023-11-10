<?php
include_once('conexcrud.php');

$id = $_GET['Id'];

$sql_delete_claves = "DELETE FROM claves WHERE id_Cliente = '$id'";
$query_delete_claves = mysqli_query($conex, $sql_delete_claves);

if ($query_delete_claves) {
    $sql_delete_clientes = "DELETE FROM clientes WHERE id_Cliente = '$id'";
    $query_delete_clientes = mysqli_query($conex, $sql_delete_clientes);

    if ($query_delete_clientes) {
        header('location:crud.php');
    }
}
?>
