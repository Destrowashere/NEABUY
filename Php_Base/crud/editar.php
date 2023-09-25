<?php
  
       include_once('conexcrud.php');

       $id = $_GET['Id'];


       $sql = "SELECT * FROM clientes WHERE id_Cliente = '$id'";



       $query = mysqli_query($conex,$sql);

       $fila = mysqli_fetch_array($query);
       ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Editar cliente</h1>
    <br>
            <div class="container">
            <form action="editarda.php" method="POST">
                <input type="hidden" name="id" value="<?php
echo $fila['id_Cliente']
?>">
  <div class="mb-3">
         <label class="form-label">Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre" name="Nombre" value="<?php
echo $fila['Nombre']
?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Apellido</label>
    <input type="text" class="form-control"  placeholder="Apellido" name="Apellido" value="<?php
echo $fila['Apellido']
?>">
  
 
  </div>
  <div class="mb-3">
  <label class="form-label">Telefono</label>
    <input type="bigint" class="form-control"  placeholder="Telefono" name= "Telefono" value="<?php
echo $fila['Telefono']
?>">
  </div>  
  <div class="mb-3">
  <label class="form-label">Direccion</label>
    <input type="text" class="form-control" placeholder="Direccion" name="Direccion"value="<?php
echo $fila['Direccion']
?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Cedula</label>
    <input type="bigint" class="form-control" placeholder="Cedula" name="Cedula" value="<?php
echo $fila['Cedula']
?>">
  </div>

  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Editar usuario </button>
  <a href="crud.php" class="btn btn-dark ">Regresar</a></div>
</form>
            </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>