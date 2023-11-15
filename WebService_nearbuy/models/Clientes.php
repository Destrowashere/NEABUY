<?php

    class Clientes extends Conectar{

        public function update_clientes($id_Cliente,$Nombre,$Apellido,$Telefono,$Direccion,$Fecha,$Cedula){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE clientes SET Nombre = ?, Apellido = ?, Telefono = ?, Direccion = ?, Fecha = ?, Cedula = ? WHERE id_Cliente = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $Nombre);
            $sql->bindValue(2, $Apellido);
            $sql->bindValue(3, $Telefono);
            $sql->bindValue(4, $Direccion);
            $sql->bindValue(5, $Fecha);
            $sql->bindValue(6, $Cedula);
            $sql->bindValue(7, $id_Cliente);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }


?>