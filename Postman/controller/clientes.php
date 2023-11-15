<?php
    header('Content-Type: aplication/json');


   require_once("../config/conexion.php");
   require_once("../models/Clientes.php");
   $clientes = new Clientes();

   $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll":
            $datos=$clientes->get_clientes();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$clientes->get_clientes_x_Idd($body["id_Cliente"]);
            echo json_encode($datos);
            break;

            case "Insert":
                $datos=$clientes->insert_clientes($body["Nombre"],$body["Apellido"], $body["Telefono"],$body["Direccion"], $body["Fecha"],
                $body["Cedula"]);
                echo json_encode("Insert Correcto");
                break;

           case "Update":
                    $datos=$clientes->update_clientes($body["id_Cliente"], $body["Nombre"],$body["Apellido"], $body["Telefono"],$body["Direccion"], $body["Fecha"], 
                    $body["Cedula"]);
                    echo json_encode("Correcto");
                    break;

             case "Delete":
                    $datos=$clientes->delete_clientes($body["id_Cliente"]);
                    echo json_encode("Delete Correcto");
                    break;
     
    }
?>