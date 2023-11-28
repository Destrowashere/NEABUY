<?php

    header('Content-type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/repartidor.php");
    $repartidor = new Repartidor();

    $body = json_decode(file_get_contents("php://input"), true);    

    switch($_GET["op"]){
     
        case "Update":
            $datos=$repartidor->update_repartidor($body["id_Cliente"],$body["Apellido"],$body["Telefono"],$body["medioTrasp"]);
            echo json_encode("Correcto");
        break;
        
    }
?>