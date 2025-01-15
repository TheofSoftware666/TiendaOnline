document.addEventListener('DOMContentLoaded', inicarPanelControl);

function inicarPanelControl(){
    // Buttons
    buttons();

    
};

function buttons() {
    const btnAgregar = document.querySelector('#btn-agregar');
    const btnMarca = document.querySelector('#btn-marca');
    const btnCategoria = document.querySelector('#btn-categoria');
    const btnCatalogo = document.querySelector('#btn-catalogo');
    const btnPedidos = document.querySelector('#btn-pedidos');
    const btnSalir = document.querySelector('#btn-salir');

    btnSalir.addEventListener('click', ()=> {
        window.location.href = "../index.php"; 
    });

    btnAgregar.addEventListener('click', agregarProducto);
    btnMarca.addEventListener('click', agregarMarca);
    btnCategoria.addEventListener('click', agregarCategoria);
    btnCatalogo.addEventListener('click', verCatalogo);
    btnPedidos.addEventListener('click', verPedidos);
}

function agregarProducto(){
    borrarHTML();
    const titulo = document.querySelector('#title-proceso');
    titulo.textContent = "Agregar nuevo Producto";
    const contentformulario = document.querySelector('#content-formulario');
    mostrarHTML(contentformulario);
}

function agregarMarca(){
    borrarHTML();
    const titulo = document.querySelector('#title-proceso');
    titulo.textContent = "Agregar nueva marca";
    const contentformulario = document.querySelector('#content-form-brand');
    mostrarHTML(contentformulario);
}

function agregarCategoria(){
    borrarHTML();
    const titulo = document.querySelector('#title-proceso');
    titulo.textContent = "Agregar nueva categoria";
    const contentformulario = document.querySelector('#content-form-cate');
    mostrarHTML(contentformulario);
}

function verCatalogo(){
    borrarHTML();
    const titulo = document.querySelector('#title-proceso');
    titulo.textContent = "Ver mis productos";
    const contentformulario = document.querySelector('#content-producto');
    mostrarHTML(contentformulario);
}

function verPedidos() {
    borrarHTML();
    const titulo = document.querySelector('#title-proceso');
    titulo.textContent = "Ver mis pedidos";
    const contentformulario = document.querySelector('#content-pedido');
    mostrarHTML(contentformulario);
}

function mostrarHTML(contenido){
    contenido.classList.remove('ocultar');
}

function borrarHTML() {
    const contenedor = document.querySelector('#content-navegation');
    const formAgregar = document.querySelector('#content-formulario');
    const formMarca = document.querySelector('#content-form-brand');
    const formCategoria = document.querySelector('#content-form-cate');
    const productos = document.querySelector('#content-producto');
    const pedidos = document.querySelector('#content-pedido');

    if(contenedor.hasChildNodes){
        formAgregar.classList.add('ocultar');
        formMarca.classList.add('ocultar');
        formCategoria.classList.add('ocultar');
        productos.classList.add('ocultar');
        pedidos.classList.add('ocultar');
    };
}