const btnTema = document.getElementById("btn-tema");

btnTema.addEventListener("click", function() {

    document.body.classList.toggle("oscuro");

});


const btnMenu = document.getElementById("btn-menu");
const navUl = document.querySelector("nav ul");


btnMenu.addEventListener("click", function() {

    navUl.classList.toggle("abierto");
    
});