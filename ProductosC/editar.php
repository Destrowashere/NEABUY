<?php
  
       include_once('conexcrudd.php');

       $id = $_GET['id'];


       $sql = "SELECT * FROM producto WHERE Id_Producto = '$id'";



       $query = mysqli_query($conex,$sql);

       $fila = mysqli_fetch_array($query);
       ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Editar producto</h1>
    <br>
            <div class="container">
            <form action="editarda.php" method="POST">
                <input type="hidden" name="id" value="<?php
echo $fila['Id_Producto']
?>">
  <div class="mb-3">
         <label class="form-label">Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre" name="Nombre" value="<?php
echo $fila['Nombre']
?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Precio</label>
    <input type="number" class="form-control"  placeholder="Precio" name="Precio" value="<?php
echo $fila['Precio']
?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Descripcion</label>
    <input type="text" class="form-control"  placeholder="Descripcion" name="Descripcion" value="<?php
echo $fila['Descripcion']
?>">
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Editar producto </button>
  <a href="crud.php" class="btn btn-dark ">Regresar</a></div>
</form>
            </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>