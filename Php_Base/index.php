<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="icon" href="Nearbuylogo-removebg-preview.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<form method="POST" autocomplete="off">
    <h2>Bienvenido</h2>

    <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre" required>
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type="text" maxlength="50"  name="lastname" placeholder="Apellido" required>
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required>
            <i class="fa-solid fa-lock"></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo" required>
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type="number" name="phone" placeholder="Telefono" required>
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="input-container">
            <input type="" name="direct" placeholder="Direccion" required>
            <i class="fa-solid fa-maps"></i>
        </div>

        <a href="#">Terminos y condiciones</a>
       <input type="submit" name="send" class="btn" value="Enviar">
    </div>
</form>

<?php 
    include("send.php");
?>

</body>
</html>