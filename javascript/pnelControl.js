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
    btnCatalogo.addEventListener('click', agregarCatalogo);
    btnPedidos.addEventListener('click', agregarPedidos);
}

function borrarHTML(){
    const contenedorDiv = document.querySelector('#content-navegation');
    while(contenedorDiv.hasChildNodes()){
        contenedorDiv.removeChild(contenedorDiv.firstChild);
    }
}

async function agregarProducto(){
    const url = '../data/dataInputAgregar.json';
    const contenido = await layoutInput(url);
    
    generarHTML(contenido);
}

function agregarMarca(){

}

function agregarCategoria(){

}

function agregarCatalogo(){

}

function agregarPedidos() {
    
}

async function layoutInput(url){
    const response = await fetch(url);
    const contenido = await response.json();
    return contenido;
}

function generarHTML(contenido){
    let id = 0;
    const contenedorHTML = document.querySelector('#content-navegation');
    const form = document.createElement('FORM');
    form.setAttribute('id','form-add');
    form.method = 'index.php';
    form.action = "POST";

    contenido.forEach(elementInput => {
        const div = document.createElement('DIV');
        const input = document.createElement(elementInput.elemento);
        
        div.classList.add('item-form-input');
        input.type = elementInput.type;
        input.name = elementInput.name;
        input.setAttribute('id',elementInput + id);
        input.placeholder = elementInput.placeholder;
        div.appendChild(input);
        if(elementInput.label.length != 0){
            const label = document.createElement('LABEL');
            label.textContent = elementInput.label;
            div.appendChild(label);
        }
        form.appendChild(div);
        id++;
        console.log(input);
    });
    contenedorHTML.appendChild(form);
}