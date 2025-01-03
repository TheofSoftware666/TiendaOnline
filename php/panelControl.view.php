<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/panelControl.css">
    <title>Panel de Control</title>
</head>
<body>

    <div class="content-bar-cpanel">
    <button id="btn-" title="Ir a mi cuenta" class="btn btn-nav">MR</button>
            <nav class="bar-navegation">
                <button id="btn-agregar" title="" class="btn btn-nav"><img src="./../img/agregar.png" alt="Error 404" title="Agregar Producto"></button>
                <button id="btn-marca" title="" class="btn btn-nav"><img src="./../img/etiqueta.png" alt="Error 404" title="Agregar Marca"></button>
                <button id="btn-categoria" title="" class="btn btn-nav"><img src="./../img/solicitud.png" alt="Error 404" title="Agregar Categoria"></button>
                <button id="btn-catalogo" title="" class="btn btn-nav"><img src="./../img/inventario.png" alt="Error 404" title="Ver mis Productos"></button>
                <button id="btn-pedidos" title="" class="btn btn-nav"><img src="./../img/buscar-pedido.png" alt="Error 404" title="Ver Pedidos"></button>
                </nav> 
            <button id="btn-salir" title="" class="btn btn-close"><img src="./../img/boton-salir.png" alt="Error 404" title="Salir del Panel de Control"></button>
    </div>
    <!-- Este sera el content de flex -->
    <div class="contenedor-cpanel">
        <div class="item-cpanel content">
            <h3 id="title-proceso">Catalogo</h3>
            <div id="content-navegation" class="item-content">
                
            

            </div>
        </div>
    </div>
    <script src="../javascript/pnelControl.js"></script>
</body>
</html>

