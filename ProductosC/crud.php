<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Nearbuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <a href="../../index.html">A</a>
    <h1 class="bg-warning p-2 text-white text-center">Crud mysql</h1>
    <br>
    <div class="container">
        <a href="agregar.php" class="btn btn-danger">Agregar Producto</a>
    </div>

    <div class="container  bg-light p-3 border border-dark rounded">
        <h1 class="text-center">lista productos</h1>
        <table class="table">
  <thead class= "table-dark">

      <th scope="col">Id_Producto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripion</th>
  </thead>
  <tbody>
    
  <?php
include("conexcrudd.php");

$sql = "SELECT * FROM producto";
$query = mysqli_query($conex, $sql);

while ($fila = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <th scope="row"><?php echo $fila['Id_Producto']; ?></th>
        <td><?php echo $fila['Nombre']; ?></td>
        <td><?php echo $fila['Precio']; ?></td>
        <td><?php echo $fila['Descripcion']; ?></td>
          <th scope="row">
            <a href="editar.php?Id<?php
echo $fila['Id_Producto']
?>" class="btn btn-warning" >Editar datos</a>
            <a href="eliminar.php?Id=<?php
echo $fila['Id_Producto']
?>" class="btn  btn-danger">Eliminar producto</a>
            
          </th>
    </tr>
    <?php
}
?>
    
   
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>