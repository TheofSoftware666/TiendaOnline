<<<<<<< HEAD
<?php

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
=======
<?php

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
>>>>>>> DevMarcoRico
?>