<?php

//  iniciar App funciones
require 'app.php';

//  Conexion de Base de Datos
$estadoConexion = conexionBD();
$obtenerProductos =  consultarProductos($estadoConexion);


//  Requerir Vista del index principal
require 'index.view.php';
?>