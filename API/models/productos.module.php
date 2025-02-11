<?php

function getProductos($bd) {
    $query = "SELECT * FROM productos;";
    $consulta = $bd->prepare($query);
    $consulta->execute();

    $resultados = $consulta->fetchAll();

    echo json_encode($resultados);
}


?>