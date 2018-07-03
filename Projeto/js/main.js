let botao = document.querySelector('.menu-principal__btn');
let menuPrincipal = document.querySelector('.menu-principal');

botao.addEventListener("click", abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.remove('menu-principal--fechado');
    console.log(menuPrincipal.classList);
}
