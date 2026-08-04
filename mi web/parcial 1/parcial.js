const btnConfirmar = document.querySelector("#btn-confirmar");
const formulario = document.querySelector("form");
const mensajeP = document.querySelector("#mensaje");

function confirmarTurno() {
    if (formulario.checkValidity()) {
        mensajeP.textContent = "Turno recibido - te atiende Jean Brandon Vargas Mercado";
        mensajeP.classList.remove("oculto");
    } else {
        formulario.reportValidity();
    }
}

btnConfirmar.addEventListener("click", confirmarTurno);