<?php

function consultarProductos($conexion){
    $consulta = $conexion->prepare('SELECT * FROM inventario');
    $consulta->execute();

    $obtenerDatos = $consulta->fetchAll();

    return $obtenerDatos;
}

function insertarHTML($productos){
    foreach ($productos as $producto) {
       echo '
       <div class="card-producto">
            <div class="producto-img"><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></div>
            <div class="monto-producto">$ 1,200.00</div>
            <div class="producto-marca">' . $producto['nombreProducto'] . '</div>
            <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
            <div class="producto-promocion">% 30 de descuento</div>
            <div class="producto-con-descuento">Con descuento: $ 899.99</div>
            <button type="button" class="btn-agregar-carrito"> <img src="./public/img/carrito-de-compras.png" alt="">Agregar al carrito</button>
        </div>
       ';
    }
}

function pruebaPHP(){
    echo 'La conexion es exitosa';
}
?>