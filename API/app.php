<?php
require './../config/db.php';
require './api/routes/routes.php';

// Conexion con la Base Datos
$conexion = conexionBD();

// Validar conexion
if(!$conexion){
    require './views/error.php';
    die;
}

// Obtenemos el metodo
header("Content-Type: application/json");
$request = $_SERVER['REQUEST_METHOD'];

// Enviar a las rutas
routesAPI($request);

?>