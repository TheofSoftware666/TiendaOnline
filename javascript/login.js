<<<<<<< HEAD
document.addEventListener('DOMContentLoaded', app);

function app(){
    const mail = document.querySelector('#mail');

    mail.addEventListener('input', buscarUsuario);
}

function buscarUsuario(e){
    const userName = document.querySelector('#nombreUsuario');
    let inputEmail = e.target.value;


    if(inputEmail.indexOf('@') == -1){
        return;
    }

    // * Añadir al textContent
    userName.textContent = inputEmail == '' ? inputEmail : `, ${inputEmail.split('@')[0]}`;
=======
document.addEventListener('DOMContentLoaded', app);

function app(){
    const mail = document.querySelector('#mail');

    mail.addEventListener('input', buscarUsuario);
}

function buscarUsuario(e){
    const userName = document.querySelector('#nombreUsuario');
    let inputEmail = e.target.value;


    if(inputEmail.indexOf('@') == -1){
        return;
    }

    // * Añadir al textContent
    userName.textContent = inputEmail == '' ? inputEmail : `, ${inputEmail.split('@')[0]}`;
>>>>>>> DevMarcoRico
}