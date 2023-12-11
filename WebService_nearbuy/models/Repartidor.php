<?php

    class Repartidor extends Conectar{
        public function get_repartidor(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM repartidor ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function get_repartidor_x_Idd($id_Cliente) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM repartidor WHERE id_Cliente = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->bindParam(1, $id_Cliente);
            $stmt->execute();
    
            return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        
        public function insert_repartidor( $Apellido, $Telefono, $medioTrasp) {
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "INSERT INTO repartidor(id_Cliente, Apellido, Telefono, medioTrasp) VALUES (NULL, ?, ?, ?)";
            $sql = $conectar->prepare($sql);
            $sql->bindParam(1, $Apellido);
            $sql->bindParam(2, $Telefono);
            $sql->bindParam(3, $medioTrasp);
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

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