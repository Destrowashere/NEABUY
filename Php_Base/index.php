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
<header class="inicio">
                <a href="http://localhost/NEABUY/index.html " class="ini">Inicio</a>
            </header>
    <h2>Bienvenido a NearBuy</h2>

    <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre" required required minlength="4" maxlength="50">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type="text" maxlength="50"  name="lastname" placeholder="Apellido" required required minlength="4" maxlength="50">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-container">
            <input type="number" name="cedula" placeholder="Numero de cedula" required min="1" max="9999999999">
            <i class="fa-solid fa-earth-americas"></i>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required minlength="6" maxlength="20">
            <i class="fa-solid fa-lock"></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo" required required minlength="2" maxlength="30">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type="number" name="phone" placeholder="Telefono" required min="1" max="9999999999">
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="input-container">
            <input type="text" name="direct" placeholder="Direccion" required required minlength="6" maxlength="50">
            <i class="fa-solid fa-house-user"></i>
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