const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const email = document.querySelector("#email").value.trim();
    const turno = document.querySelector("#turno").value;

    if (nombre === "") {
        mostrarAviso("Falta tu nombre, campeón.", "error");
    } else if (!email.includes("@")) {
        mostrarAviso("Ese correo no parece correo: le falta el @.", "error");
    } else if (turno === "") {
        mostrarAviso("Por favor selecciona un turno de preferencia.", "error");
    } else {
        mostrarAviso("Inscripción recibida. Te contactamos hoy.", "exito");
        formularioContacto.reset();
    }
}

function mostrarAviso(mensaje, tipo) {
    avisoContacto.textContent = mensaje;
    avisoContacto.className = `aviso ${tipo}`;
}

formularioContacto.addEventListener("submit", revisarFormulario);