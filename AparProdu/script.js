 // Array con las URLs de las imágenes
 const imagenes = [
    "imagenes/ham1.jpg",
    "imagenes/piz1.png",
    "imagenes/tac1.jpg",
    // Agrega más URLs de imágenes aquí
];

// Índice de la imagen actual
let indiceImagen = 0;

// Función para cambiar la imagen
function cambiarImagen() {
    // Obtener la imagen actual
    const imagenActual = document.getElementById('hamburguesa');

    // Actualizar el índice de la imagen
    indiceImagen = (indiceImagen + 1) % imagenes.length;

    // Obtener la URL de la nueva imagen
    const nuevaImagenURL = imagenes[indiceImagen];

    // Aplicar animación de acercamiento
    imagenActual.style.transform = "scale(1.2)"; // Cambia el valor de escala según sea necesario

    // Esperar un breve momento antes de cambiar la imagen
    setTimeout(function() {
        // Cambiar la URL de la imagen actual
        imagenActual.src = nuevaImagenURL;
        
        // Restablecer la escala a su valor original después de un breve retraso
        setTimeout(function() {
            imagenActual.style.transform = "scale(1)";
        }, 100); // Ajusta el tiempo de espera según sea necesario
    }, 500); // Ajusta el tiempo de espera según sea necesario
}

// Establecer un intervalo de tiempo de 2 segundos para cambiar la imagen
setInterval(cambiarImagen, 2000);