const btnTema = document.getElementById("btn-tema");

btnTema.addEventListener("click", function() {
    document.body.classList.toggle("oscuro");
});

const btnMenu = document.getElementById("btn-menu");
const navUl = document.querySelector("nav ul");

btnMenu.addEventListener("click", function() {
    navUl.classList.toggle("abierto");
});

const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const email = document.querySelector("#email").value.trim();
    const turno = document.querySelector("#turno").value;

    if (nombre === "") {
        avisoContacto.textContent = "Falta tu nombre, campeón.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (email.includes("@") === false) {
        avisoContacto.textContent = "Ese correo no parece correo: le falta el @.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (turno === "") {
        avisoContacto.textContent = "Por favor selecciona un turno de preferencia.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        avisoContacto.textContent = "Inscripción recibida. Te contactamos hoy.";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
        formularioContacto.reset();
    }
}

formularioContacto.addEventListener("submit", revisarFormulario);