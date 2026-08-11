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
    const nombre = document.querySelector("#nombre").value.trim();
    const email = document.querySelector("#email").value.trim();
    const turno = document.querySelector("#turno").value;

    avisoContacto.classList.remove("error", "exito");
    avisoContacto.textContent = "";

    if (nombre === "") {
        event.preventDefault(); 
        avisoContacto.textContent = "Falta tu nombre, campeón.";
        avisoContacto.classList.add("error");
    } else if (email.includes("@") === false) {
        event.preventDefault(); 
        avisoContacto.textContent = "Ese correo no parece correo: le falta el @.";
        avisoContacto.classList.add("error");
    } else if (turno === "") {
        event.preventDefault(); 
        avisoContacto.textContent = "Por favor selecciona un turno de preferencia.";
        avisoContacto.classList.add("error");
    } 
}

formularioContacto.addEventListener("submit", revisarFormulario);