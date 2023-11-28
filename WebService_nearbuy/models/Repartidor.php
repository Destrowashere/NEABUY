<?php

    class Repartidor extends Conectar{

        public function update_repartidor($id_Cliente,$Apellido,$Telefono,$medioTrasp){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE repartidor SET Apellido = ?, Telefono = ?, medioTrasp = ? WHERE id_Cliente = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $Apellido);
            $sql->bindValue(2, $Telefono);
            $sql->bindValue(3, $medioTrasp);
            $sql->bindValue(4, $id_Cliente);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }


?>