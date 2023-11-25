<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="icon" href="Nearbuylogo-removebg-preview.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeY1xspAAAAANGSMIJCNpQEediDDpztjC9V79of"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</head>
<body>
    
<form method="POST" autocomplete="off" id="demo-form">
<header class="inicio">
                <a href="../index.html">Inicio</a>
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
        <div class="input-container">
            <select name="role" required>
                <option value="Cliente">Cliente</option>
                <option value="Tendero">Tendero</option>
                <option value="Repartidor">Repartidor</option>
            </select>

           
      
        <a href="#">Terminos y condiciones</a>
        <a href="crud/crud.php">crud</a>
      
<div class="text-center"> 
    <input type="submit" name="send" class="btn btn-primary text-white" value="Enviar">
</div>


     
    </div>
</form>

<?php 
    include("send.php");
?>

</body>
</html>