<?php

    header('Content-type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Clientes.php");
    $clientes = new Clientes();

    $body = json_decode(file_get_contents("php://input"), true);    

    switch($_GET["op"]){
     
        case "Update":
            $datos=$clientes->update_clientes($body["id_Cliente"],$body["Nombre"],$body["Apellido"],$body["Telefono"],$body["Direccion"],$body["Fecha"],$body["Cedula"]);
            echo json_encode("Correcto");
        break;
        
    }
?>