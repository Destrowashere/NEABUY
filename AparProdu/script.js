document.addEventListener("DOMContentLoaded", function () {
    var imagenes = document.querySelectorAll(".imagen-animada");
    var index = 0;
  
    function mostrarImagen() {
      imagenes.forEach(function (imagen) {
        imagen.style.opacity = 0;
      });
  
      imagenes[index].style.opacity = 1;
      index = (index + 1) % imagenes.length;
    }
  
    mostrarImagen();
    setInterval(mostrarImagen, 2000);
  });
  