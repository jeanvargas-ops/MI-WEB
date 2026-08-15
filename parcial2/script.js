let formulario = document.querySelector("#form-turno");
let parrafoAviso = document.querySelector("#aviso-turno");

function validarTurno(event) {
    let nombre = document.querySelector("#nombre").value;
    let correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {
        event.preventDefault(); 
        parrafoAviso.textContent = "Nos falta tu nombre y tu correo para darte el turno.";
        parrafoAviso.classList.add("error");
        parrafoAviso.classList.remove("exito");

    } else if (!correo.includes("@")) {
        event.preventDefault();
        parrafoAviso.textContent = "Revisá tu correo - le falta el arroba.";
        parrafoAviso.classList.add("error");
        parrafoAviso.classList.remove("exito");

    } else {
        parrafoAviso.textContent = "Turno reservado - te atiende Jean Brandon Vargas Mercado";
        parrafoAviso.classList.add("exito");
        parrafoAviso.classList.remove("error");
        
    }
}

formulario.addEventListener("submit", validarTurno);