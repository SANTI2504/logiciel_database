
window.addEventListener('DOMContentLoaded', inicio, false);

function inicio() {
	
	document.getElementById("myform").addEventListener('submit', validar, false);

}

function validar(evt) {
	let user = document.getElementById("user").value;
	let pass = document.getElementById("pass").value;

	if (user == 'admin@correo.com' && pass == "12345") {
		window.location = 'app/index-admin.html';
		evt.preventDefault();
	} else if (user == 'paciente@correo.com' && pass == "12345") {
		window.location = 'app/index-paciente	.html';
		evt.preventDefault();
	} else{
		alert("Usuario incorrecto");

	}
}


function datos_env(){
	alert("sus datos han sido enviados");
}

function cancelar(){
	window.location = 'index.html'; 
}
