<?php

namespace App;

class RegisterService
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function register($data)
    {
        if (
            empty($data['name']) ||
            empty($data['lastname']) ||
            empty($data['password']) ||
            empty($data['email']) ||
            empty($data['phone'])
        ) {
            return false;
        }

        $name = trim($data["name"]);
        $lastname = trim($data["lastname"]);
        $password = trim($data["password"]);
        $cedula = trim($data["cedula"]);
        $email = trim($data["email"]);
        $phone = trim($data["phone"]);
        $direct = trim($data["direct"]);
        $fecha = date("y/m/d");

        $contrasena_encriptada = password_hash($password, PASSWORD_DEFAULT);

        $consulta1 = "INSERT INTO clientes (Nombre, Apellido, Telefono, Direccion, Fecha, Cedula)
                      VALUES (?, ?, ?, ?, ?, ?)";
        $stmt1 = $this->db->prepare($consulta1);
        $stmt1->bind_param('ssssss', $name, $lastname, $phone, $direct, $fecha, $cedula);

        if ($stmt1->execute()) {
            $id_cliente = $this->db->insert_id;

            $consulta2 = "INSERT INTO claves (id_Cliente, Correo, Contrasena)
                          VALUES (?, ?, ?)";
            $stmt2 = $this->db->prepare($consulta2);
            $stmt2->bind_param('iss', $id_cliente, $email, $contrasena_encriptada);

            if ($stmt2->execute()) {
                $rol_seleccionado = $data["role"];
                $consulta3 = "INSERT INTO roles (id_Cliente, Rol)
                              VALUES (?, ?)";
                $stmt3 = $this->db->prepare($consulta3);
                $stmt3->bind_param('is', $id_cliente, $rol_seleccionado);

                return $stmt3->execute();
            }
        }

        return false;
    }
}
