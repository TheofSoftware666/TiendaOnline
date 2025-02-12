const contentProductos = document.querySelector('.sec-productos');

contentProductos.addEventListener('click', addCarrito);

function addCarrito(e) {
    const elemento = e.target.parentNode.children[1];

    if(!elemento.classList.contains('producto-codigo') || !e.target.classList.contains('btn-agregar-carrito')){
        return; 
    }

    const body = document.querySelector('body');
    const toast = document.createElement('DIV');
    const headerToast = document.createElement('DIV');
    const iconToast = document.createElement('I');
    const tilteToast = document.createElement('DIV');
    const bodyToast = document.createElement('DIV');

    toast.classList.add('toast');
    headerToast.classList.add('toast-head');
    iconToast.classList.add('fa-solid','fa-cart-shopping');
    tilteToast.textContent = "Agregas un producto al carrito";
    bodyToast.textContent = "Crea tu cuenta para obtener beneficios";
    bodyToast.classList.add('toast-body');

    headerToast.appendChild(iconToast);
    headerToast.appendChild(tilteToast);
    toast.appendChild(headerToast);
    toast.appendChild(bodyToast);
    body.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    },2000);
}