const btnTema = document.getElementById("btn-tema");

btnTema.addEventListener("click", function() {

    document.body.classList.toggle("oscuro");

});


const btnMenu = document.getElementById("btn-menu");
const navUl = document.querySelector("nav ul");


btnMenu.addEventListener("click", function() {

    navUl.classList.toggle("abierto");
    
});

const formPedido = document.getElementById("form-pedido");
const errorPedido = document.getElementById("error-pedido");

formPedido.addEventListener("submit", function(e) {
    e.preventDefault(); // Evita que la página se recargue
    
    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const turno = document.getElementById("turno").value;

    if (nombre === "" || correo === "" || turno === "") {
        errorPedido.textContent = "Por favor, completa todos los campos obligatorios.";
        errorPedido.className = "aviso error";
    } else {
        errorPedido.textContent = "¡Solicitud enviada con éxito! Te contactaremos pronto.";
        errorPedido.className = "aviso exito";
        formPedido.reset();
    }
});