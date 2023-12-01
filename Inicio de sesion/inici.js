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


const correo = document.getElementById("correo")
const password = document.getElementById("password")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")