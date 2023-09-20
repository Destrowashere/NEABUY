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
                <a href="../index.html">Inicio</a>
            </header>
    <h2>Bienvenido a NearBuy</h2>

    <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre" required required minlength="4" maxlength="50">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type="number" maxlength="50"  name="buy" placeholder="Precio" required required minlength="4" maxlength="50">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-container">
            <input type="text" name="desc" placeholder="Descripcion" required min="1" max="9999999999">
            <i class="fa-solid fa-earth-americas"></i>
        </div>

      <form>
        <div class="custom-file">
          <label for="foto" class="custom-file-label">Agregar imagen</label>
          <br><br>
          <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">

        </div>
            
        </div>
        <a href="#">Terminos y condiciones</a>
        <a href="crud/crud.php">crud</a>
       <input type="submit" name="send" class="btn" value="Enviar">

     
    </div>
</form>

<?php 
    include("send.php");
?>

</body>
</html>