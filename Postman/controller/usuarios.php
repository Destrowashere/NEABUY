<?php
    header('Content-Type: aplication/json');


   require_once("../config/conexion.php");
   require_once("../models/Usuarios.php");
   $usuarios = new Usuarios();

   $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll":
            $datos=$usuarios->get_clientes();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$usuarios->get_clientes_x_Idd($body["id_Cliente"]);
            echo json_encode($datos);
            break;

            case "Insert":
                $datos=$usuarios->insert_clientes($body["id_Cliente"], $body["Nombre"],$body["Apellido"], $body["Telefono"],$body["Direccion"], $body["Fecha"],
                $body["Cedula"]);
                echo json_encode("Insert Correcto");
                break;

           case "Update":
                    $datos=$usuarios->update_clientes($body["id_Cliente"], $body["Nombre"],$body["Apellido"], $body["Telefono"],$body["Direccion"], $body["Fecha"],
                    $body["Cedula"]);
                    echo json_encode("Update Correcto");
                    break;

             case "Delete":
                    $datos=$usuarios->delete_clientes($body["id_Cliente"]);
                    echo json_encode("Delete Correcto");
                    break;
     
    }
?>