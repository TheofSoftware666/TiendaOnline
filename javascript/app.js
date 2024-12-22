const contentPresentacion = document.querySelector('#presentacion');
const contenedorMenu = document.querySelector('.contenedor-barra-navegacion');
const barraBusqueda = document.querySelector('#barra-buscar');
const btnMenu = document.querySelector('#btn-menu');
const btnCerrar = document.querySelector('#btn-close');
const header = document.querySelector('.sec-header');
const divCarrito = document.querySelector('.contenedor-carrito');
const btnCerrarDivCarrito = document.querySelector('#btn-close-carrito');
const btnAbrirCarrito = document.querySelector('#contenedorCarrito');

document.addEventListener('DOMContentLoaded',()=>{

    // console.log("Termino de cargar la pagina");
    btnMenu.addEventListener('click',mostrarNavegacion);
    btnCerrar.addEventListener('click',cerrarNavegacion);
    btnAbrirCarrito.addEventListener('click',abrirCarrito);
    btnCerrarDivCarrito.addEventListener('click',cerrarCarrito);

    // Eliminar presentacion 
    presentacion();
});

//  Mostrar menu de navegacion
function mostrarNavegacion(){
    // console.log("Inicio funcion");
    contenedorMenu.classList.remove('cerrar');    
    contenedorMenu.classList.add('open');
}

//  Cerrar menu de navegacion
function cerrarNavegacion(){
    // console.log("Cerrar navegacion");
    contenedorMenu.classList.remove('open');
    barraBusqueda.value = "";
    contenedorMenu.classList.add('cerrar');
}

//  Añadiendo header
window.onscroll = function(){
    let scroll =  window.scrollY;
    //console.log(scroll);

    if(scroll > 100 && !header.classList.contains('position')){
        header.classList.add('position');  
    }else if(scroll == 0){
        header.classList.remove('position');
    }
}

//  Banner de presentacion
function presentacion(){
    setTimeout(()=>{
        contentPresentacion.classList.add('animacion-presentacion');
    },1000);
    setTimeout(()=>{
        contentPresentacion.remove();
    },2000);
}

//  Abrir carrito
function abrirCarrito(){
    //console.log(btnAbrirCarrito);
    divCarrito.classList.add('open-carrito');
}

//  Cerrar carrito
function cerrarCarrito(){
    divCarrito.classList.remove('open-carrito');
}