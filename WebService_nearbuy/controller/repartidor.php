<?php

    header('Content-type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/repartidor.php");
    $repartidor = new Repartidor();

    $body = json_decode(file_get_contents("php://input"), true);    

    switch($_GET["op"]){
        case "GetAll":
            $datos=$repartidor->get_repartidor();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$repartidor->get_repartidor_x_Idd($body["id_Cliente"]);
            echo json_encode($datos);
            break;

            case "Insert": 
                 
            $datos=$repartidor->insert_repartidor($body["id_Cliente"],$body["Apellido"], $body["Telefono"],$body["medioTransp"]);
            echo json_encode("Insert Correcto");
            break;

     
        case "Update":
            $datos=$repartidor->update_repartidor($body["id_Cliente"],$body["Apellido"],$body["Telefono"],$body["medioTrasp"]);
            echo json_encode("Correcto");
        break;
        
    }
?>