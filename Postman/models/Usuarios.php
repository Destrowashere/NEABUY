<?php
    class Usuarios extends Conectar{
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

        
        public function insert_clientes($id_Cliente, $Nombre, $Apellido, $Telefono, $Direccion, $Fecha, $Cedula) {
            $conectar = parent::conexion();
            parent::set_names();
        
            $sql = "INSERT INTO clientes (id_Cliente, Nombre, Apellido, Telefono, Direccion, Fecha, Cedula) 
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conectar->prepare($sql);
            $stmt->bindParam(1, $id_Cliente);
            $stmt->bindParam(2, $Nombre);
            $stmt->bindParam(3, $Apellido);
            $stmt->bindParam(4, $Telefono);
            $stmt->bindParam(5, $Direccion);
            $stmt->bindParam(6, $Fecha);
            $stmt->bindParam(7, $Cedula);
            $stmt->execute();
        }
        
        

            public function update_clientes($Id, $N_Documento, $Nombre, $Apellido, $Teléfono, $Correo) {
                $conectar = parent::conexion();
                parent::set_names();
                $sql = "UPDATE usuarios set N_Documento = ?, 
                Nombre = ?, 
                Apellido = ?, 
                Teléfono = ?, 
                Correo = ? 
                WHERE 
                Id = ?";
                $stmt = $conectar->prepare($sql);
                $stmt->bindParam(1, $N_Documento);
                $stmt->bindParam(2, $Nombre);
                $stmt->bindParam(3, $Apellido);
                $stmt->bindParam(4, $Teléfono);
                $stmt->bindParam(5, $Correo);
                $stmt->bindParam(6, $Id);
                $stmt->execute();
        
                return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }


            public function delete_clientes($Id)
            {
                $conectar = parent::conexion();
                parent::set_names();
            
                $sql = "UPDATE Nombre SET
                            Cedula= '5345615'
                            WHERE
                            id_Cliente = ?";
            
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1, $Id);
                $sql->execute();
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
            }
            
        }
        
    
?>