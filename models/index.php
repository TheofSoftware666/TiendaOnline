<?php

function consultarBD($conexion, $tabla, $where = '', $limit = 0){

    if($where != '' && $limit != 0){
        $consulta = $conexion->prepare('SELECT * FROM ' . $tabla . ' WHERE = ' . $where .' LIMIT ' . $limit . '');
    }elseif($where != ''){
        $consulta = $conexion->prepare('SELECT * FROM ' . $tabla . ' WHERE = ' . $where .'');
    }elseif($limit != 0){
        $consulta = $conexion->prepare('SELECT * FROM ' . $tabla . ' LIMIT ' . $limit .'');
    }else{
        $consulta = $conexion->prepare('SELECT * FROM ' . $tabla . '');
    }
    
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    return $resultado;
}

function productosHTML($productos){
    foreach ($productos as $producto) {
       
       if($producto['estatusPromo'] == '1'){
            echo '
            <div class="card-producto">
                <div class="producto-promocion" title="Producto en Descuento"><i class="fa-solid fa-tag" style="color: #ff0000;"></i>  % 25 de descuento </div>
                <div class="producto-img"><a href="./controller/producto.php?producto=' . $producto['productoId'] . 'des='. $producto['descripcion'] .'"><img src="./public/img/arduino.jpg" alt="Error 404" title=" ' . $producto['nombre'] .' "></a></div>
                <div class="producto-info">
                    <div class="producto-nombre"> ' . $producto['nombre'] . '</div>
                    <div class="producto-codigo">002314</div>
                    <div class="producto-marca">LENOVO</div>
                    <div class="producto-montos">
                        <div class="monto-descuento">$ '. $producto['promocion'] .'</div>
                        <div class="monto-producto">$ '. $producto['monto'] .'</div>
                    </div>
                    <a href="index.php?carrito='. $producto['productoId'] .'" value="002314" class="btn-agregar-carrito"><i class="fa-solid fa-cart-shopping"></i>Añadir al carrito</a>
                </div>
            </div>
            ';
       }else {
        echo '
        <div class="card-producto">
                <div class="producto-img"><a href="./controller/producto.php?producto=' . $producto['productoId'] . 'des='. $producto['descripcion'] .'"><img src="./public/img/arduino.jpg" alt="Error 404" title=" ' . $producto['nombre'] .' "></a></div>
                <div class="producto-info">
                    <div class="producto-nombre"> ' . $producto['descripcion'] . '</div>
                    <div class="producto-codigo">002314</div>
                    <div class="producto-marca">LENOVO</div>
                    <div class="producto-montos">
                        <div class="monto-producto">$ ' . $producto['monto'] . '</div>
                    </div>
                    <a href="index.php?carrito='. $producto['productoId'] .'" value="002314" class="btn-agregar-carrito"><i class="fa-solid fa-cart-shopping"></i>Añadir al carrito</a>
                </div>
            </div>
        ';
       }
        
    }
}

function categoriasHTML($categorias){
    foreach ($categorias as $categoria) {
        echo '
            <div class="categorias-item"><a href="index.php?categoria=' . $categoria['categoriaId'] . '"> ' . $categoria['nombre'] . ' </a></div>
        ';
    }
}
?>