<?php

session_start();

// Carrito
require './models/carrito/carrito.php';

// CONSULTAR LA BASE DE DATOS
require './config/db.php';
$estadoConexion = conexionBD();

if(!$estadoConexion){
    require './views/error.php';
    return;
}else{
    // Requerir MODULO de index.php
    require './models/index.php';
    $productos = consultarProductos($estadoConexion);
    require './views/index.view.php';
}

function validarSession() {
    
    // Validar inicio de sesion
    if(isset($_SESSION['usuario'])){
        echo '<button class="btn-cerrar-session"><a href="index.php?session=1&usurio=' . $_SESSION['usuario'] . '">Cerrar Sesion</a></button>';
    }else{
        echo '<button class="btn-cerrar-session"><a href="./controller/login.php">Iniciar sesion</a></button>';
    }

}


?>