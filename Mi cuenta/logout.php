<?php

session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión
header("Location: ../index.html");

// Para evitar que el usuario regrese a la página anterior después del cierre de sesión, agregue las siguientes líneas de código:

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
header("Expires: 0"); // Proxies

?>
