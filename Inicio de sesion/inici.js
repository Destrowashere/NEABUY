const inputs = document.querySelectorAll(".input");


function focusFunc(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function blurFunc(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", focusFunc);
	input.addEventListener("blur", blurFunc);
});

const correoInput = document.getElementById('correo');
const passwordInput = document.getElementById('password');
const warningsElement = document.getElementById('warnings');

const form = document.querySelector('form');
form.addEventListener('submit', async (event) => {
  event.preventDefault(); // Prevent the form from submitting automatically

  // Validate user input
  if (!correoInput.value || !passwordInput.value) {
    warningsElement.textContent = 'Debes ingresar tu correo y contraseña para continuar.';
    return false;
  }

  const correo = correoInput.value;
  const password = passwordInput.value;

  // Check if the email address is valid
  if (!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}/.test(correo)) {
    warningsElement.textContent = 'El correo electrónico no es válido.';
    return false;
  }

  // Check if the password is at least 8 characters long
  if (password.length < 8) {
    warningsElement.textContent = 'La contraseña debe tener al menos 8 caracteres.';
    return false;
  }

  // Send data to server using AJAX
  try {
    const response = await fetch('http://localhost/NEABUY/Inicio%20de%20sesion/inici.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ correo, password }),
    });

    const data = await response.json();

    if (data.success) {
      // Login successful, redirect to homepage
      window.location.href = 'index.html';
    } else {
      warningsElement.textContent = data.message;
    }
  } catch (error) {
    warningsElement.textContent = 'Error al iniciar sesión, intenta de nuevo más tarde.';
  }
});


