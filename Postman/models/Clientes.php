<?php
    class Clientes extends Conectar{
        public function get_clientes(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM clientes ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function get_clientes_x_Idd($id_Cliente) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT * FROM clientes WHERE id_Cliente = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->bindParam(1, $id_Cliente);
            $stmt->execute();
    
            return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        
        public function insert_clientes($Nombre, $Apellido, $Telefono, $Direccion, $Fecha, $Cedula) {
            $conectar = parent::conexion();
            parent::set_names();

            $sql = "INSERT INTO clientes(id_Cliente, Nombre, Apellido, Telefono, Direccion, Fecha, Cedula) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $sql = $conectar->prepare($sql);
            $sql->bindParam(1, $Nombre);
            $sql->bindParam(2, $Apellido);
            $sql->bindParam(3, $Telefono);
            $sql->bindParam(4, $Direccion);
            $sql->bindParam(5, $Fecha);
            $sql->bindParam(6, $Cedula);
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        
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
        


           /* public function delete_clientes($id_Cliente)
            {
                $conectar = parent::conexion();
                parent::set_names();
            
                $sql = "UPDATE Nombre SET
                            Cedula= '?'
                            WHERE
                            id_Cliente = ?";
            
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1, $id_Cliente);
                $sql->execute();
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
            }/*/

            public function delete_clientes($id_Cliente) {
                $conectar = parent::conexion();
                parent::set_names();
            
                $sql = "DELETE FROM clientes WHERE id_Cliente = ?";
                $sql = $conectar->prepare($sql);
                $sql->bindParam(1, $id_Cliente);
                $sql->execute();
            
                return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            
            
        }
        
    
?>