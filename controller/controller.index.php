<?php

// CONSULTAR LA BASE DE DATOS
require './config/db.php';
$estadoConexion = conexionBD();

if(!$estadoConexion){
    require './views/error.php';
    
}else{
    // Requerir MODULO de index.php
    require './modules/index.php';
    $productos = consultarProductos($estadoConexion);
    require './views/index.view.php';
}
?>