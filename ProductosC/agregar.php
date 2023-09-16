<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Agregar producto</h1>
    <br>
            <div class="container">
            <form action="instertar.php" method="POST">
  <div class="mb-3">

    <input type="text" class="form-control"  placeholder="Nombre" name="Nombre">
  </div>
  <div class="mb-3">
  
    <input type="text" class="form-control"  placeholder="Precio" name="Precio">
  </div>
  <div class="mb-3">

    <input type="text" class="form-control"  placeholder="Descripcion" name="Descripcion">
  </div>
  <div class="mb-3">
   
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Agregar producto</button>
  <a href="crud.php" class="btn btn-dark ">Regresar</a></div>
</form>
            </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
