<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='tendero.css'>
    <title>Agregar producto</title>
  </head>
  <body>
    <header>
      <div>
        <img src="Nearbuylogo-removebg-preview.png" alt class="img-logo">

      </div>
      <nav>
        <ul class="menu"> 
          <li> <a href="index.html">Inicio</a></li>
          <li> <a href="productos.html">Productos</a></li>
        </ul>
      </nav>
    </header>
    <div class="registroa">
      <h1>Agregar producto</h1>
      <form>
        <div class="custom-file">
          <label for="foto" class="custom-file-label">Agregar imagen</label>
          <br><br>
          <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">

        </div>
        <div class="usuario">
          <label >Nombre</label>
           <input type="text" >
        </div>
        <div class="usuario">
          <input type="text" >
          <label >Descripcion</label>
        </div>
        <div class="usuario">
          <input type="text" >
          <label>Precio</label>
        </div>
        <div>
          <input class="submit" type="submit" value="Agregar" />
        </div >
        <a href="ProductosC/crud.php">crud</a>
      

      </body>