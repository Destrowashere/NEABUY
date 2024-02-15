<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="icon" href="Nearbuylogo-removebg-preview.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>
    
<form method="POST" autocomplete="off" id="demo-form">
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
            <input type="text" maxlength="50"  name="lastname" placeholder="Apellido" required required minlength="4" maxlength="50">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-container">
            <input type="number" name="cedula" placeholder="Numero de cedula" required min="1" max="9999999999">
            <i class="fa-solid fa-earth-americas"></i>
        </div>
        <div class="input-container">
    <input id="pass1" type="password" name="password" placeholder="Contraseña" required minlength="6" maxlength="20">
    <i class="fa-solid fa-lock"></i>
    <button type="button" onclick="togglePassword('pass1')">Mostrar Contraseña</button>
</div>

<div class="input-container">
    <input id="pass2" type="password" name="confirm_password" placeholder="Confirmar Contraseña" required minlength="6" maxlength="20">
    <i class="fa-solid fa-lock"></i>
    <button type="button" onclick="togglePassword('pass2')">Mostrar Contraseña</button>
</div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo" required required minlength="2" maxlength="30">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type="number" name="phone" placeholder="Telefono" required min="1" max="9999999999">
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="input-container">
            <input type="text" name="direct" placeholder="Direccion" required required minlength="6" maxlength="50">
            <i class="fa-solid fa-house-user"></i>
        </div>
        <div class="input-container">
            <select id="selectRol" name="role" required>
                <option value="Cliente">Cliente</option>
                <option value="Tendero">Tendero</option>
                <option value="Repartidor">Repartidor</option>
            </select>|

            <button onclick="redirigir()">Seleccionar Rol</button>

            <script>

                function redirigir() {
                var selectElement = document.getElementById("selectRol");
                var selectedValue = selectElement.value;
                
                switch (selectedValue) {
                    case "tendero":
                    window.location.href = "tendero.html";
                    break;
                    case "cliente":
                    window.location.href = "pagina-cliente.html";
                    break;
                    case "repartidor":
                    window.location.href = "pagina-repartidor.html";
                    break;
                    default:
                    alert("Rol no válido");
                }
                }

            </script>

           <div class="mb-3"> 

           <div class="g-recaptcha" data-sitekey="6LdksRwpAAAAANLPnkPXaBy3HpApxK7hV4fGSdrR"> 
           <?php
    $error = []; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $secretkey = "6LdksRwpAAAAAKjz4Zt1VSbnXm7iuSBYUSnCAtnZ";

            $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

            $atributos = json_decode($respuesta, true);
            if (!$atributos['success']) {
                $error[] = 'Verificar captcha';
            }
        } else {
           
            $error[] = 'Por favor, completa el captcha';
        }
    }
?>

</div>

           </div>
      
        <a href="#">Terminos y condiciones</a>
      
<div class="text-center"> 
    <input type="submit" name="send" class="btn btn-primary text-white" value="Enviar">
</div>


     
    </div>
</form>

<?php 
    include("send.php");
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#demo-form').submit(function(event) {
            // Obtener el valor de las contraseñas
            var password1 = $('#pass1').val();
            var password2 = $('#pass2').val();

            // Verificar si las contraseñas coinciden
            if (password1 !== password2) {
                alert('Las contraseñas no coinciden. Por favor, verifica.');
                event.preventDefault(); // Evitar que el formulario se envíe si las contraseñas no coinciden
            }
        });
    });
</script>
<script>
    function togglePassword(inputId) {
        var passwordInput = document.getElementById(inputId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

</body>
</html>