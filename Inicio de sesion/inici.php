<?php

session_start();

$conexion = new mysqli("localhost", "root", "", "nearbuybonitoo");

$error_message = "";
if (!empty($_POST["submit"])) {
    // Validar campos vacíos
    if (empty($_POST["Correo"]) || empty($_POST["contrasena"])) {
      $error_message = "Por favor complete todos los campos.";
    } else {
      $correo = $_POST["Correo"];
      $contrasena = $_POST["contrasena"];
  
      // Validar correo y contraseña en la base de datos
      $query = "SELECT * FROM claves WHERE Correo ='$correo'";
      $result = $conexion->query($query);
  
      if ($result) {
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $hashedPassword = $row['contrasena'];
  
          // Validar contraseña
          if (!password_verify($contrasena, $hashedPassword)) {
            ?>
            <div class="error-message">
              <p>Correo o contraseña incorrectos.</p>
              <a href="inici.html">Volver a intentar</a>
            </div>
            <?php
          } else {
            $_SESSION['usuario_nombre'] = $row['correo'];
            $_SESSION['usuario_apellido'] = $row['contrasena'];
            header("location:../indexuse.html");
            exit();
          }
        } else {
          ?>
          <div class="error-message">
            <p>Correo o contraseña incorrectos.</p>
            <a href="inici.html">Volver a intentar</a>
          </div>
          <?php
        }
      } else {
        ?><div class="error-message">
            <p>Error al conectar con la base de datos.</p>
            <a href="inici.html">Volver a intentar</a>
          </div>
          <?php
      }
    }
  }

  
  
  
  

?>

        

