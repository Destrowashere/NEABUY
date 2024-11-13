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
        <a href="agregar.php" class="btn btn-danger">Agregar usuario</a>
    </div>

    <div class="container  bg-light p-3 border border-dark rounded">
    <button onclick="generarPDF()">Descargar PDF</button><br>
    <div id="chat"><h1 class="text-center">lista usuarios</h1> 
        <table class="table">
  <thead class= "table-dark">

      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Cedula</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
include("conexcrud.php");

$sql = "SELECT * FROM clientes";
$query = mysqli_query($conex, $sql);

while ($fila = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <th scope="row"><?php echo $fila['id_Cliente']; ?></th>
        <td><?php echo $fila['Nombre']; ?></td>
        <td><?php echo $fila['Apellido']; ?></td>
        <td><?php echo $fila['Telefono']; ?></td>
        <td><?php echo $fila['Direccion']; ?></td>
        <td><?php echo $fila['Cedula']; ?></td>
          <th scope="row"> </div>
            <a href="editar.php?Id=<?php
echo $fila['id_Cliente']
?>" class="btn btn-warning" >Editar datos</a>
            <a href="eliminar.php?Id=<?php
echo $fila['id_Cliente']
?>" class="btn  btn-danger">Eliminar usuario</a>
            
          </th>
    </tr>
    <?php
}
?>
    
   
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>function generarPDF() {
  // Selecciona el contenedor del chat
  const chatElement = document.getElementById("chat");

  // Configura html2pdf para capturar el contenedor con todos sus estilos visibles
  html2pdf()
    .from(chatElement)
    .set({
      margin: 1,
      filename: 'chat.pdf',
      html2canvas: { 
        scale: 2,             // Mejora la calidad de la captura
        useCORS: true,        // Permite capturar recursos externos
        allowTaint: true,     // Permite cargar imágenes externas
        windowWidth: chatElement.scrollWidth, // Ancho del área a capturar
        windowHeight: chatElement.scrollHeight // Alto del área a capturar
      },
      jsPDF: { 
        unit: 'in', 
        format: 'a4', 
        orientation: 'portrait' 
      }
    })
    .save()
    .catch((error) => {
      console.error("Error al generar el PDF:", error);
    });
}
</script>
  </body>
</html>