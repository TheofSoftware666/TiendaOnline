<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/panelControl.css">
    <title>Panel de Control</title>
</head>
<body>
    <div class="contenedor-cpanel">
        <div class="item-cpanel nav-cpanel">
            <h3>Panel de Control</h3>
            
                <a href="" title="" class="btn btn-nav">Añadir nuevo producto</a>
                <a href="" title="" class="btn btn-nav">Ver mis Productos</a>
                <a href="" title="" class="btn btn-nav">Ver Pedidos</a>
                <a href="./../index.php" title="" class="btn btn-close">Salir del Panel</a>
            
        </div>
        <div class="item-cpanel content">
            <h4 id="title-proceso">Añadir nuevo producto</h4>
            <div id="content-navegation" class="item-content">
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">Nombre del Producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="Descripcion del producto">
                        <label for="">Descripcion del producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="number" name="nombreProducto" placeholder="STOCK">
                        <label for="">Cantidad en Inventario</label>
                    </div>
                    <div class="item-form-input">
                        <select name="seleccionMarca" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA MARCA</label>
                    </div>
                    <div class="item-form-input">
                        <select name="seleccionMarca" id="select-marca">
                            <option value="MUEBLES">MUEBLES</option>
                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                            <option value="CELULARES">CELULARES</option>
                        </select>
                        <label for="">SELECCIONA LA CATEGORIA</label>
                    </div>
                    <div class="item-form-input content-check">
                        <input id="activarProducto" type="checkbox" name="nombreProducto">
                        <label for="activarProducto">Activar Producto</label>
                    </div>
                    <div class="item-form-input content-check">
                        <input id="activarPromo" type="checkbox" name="nombreProducto">
                        <label for="activarPromo">Activar Promocion</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">Promocion</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">Precio</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">Descuento 1 </label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">IVA</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="Añadir Producto" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                    </div>
                </form>
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                        <label for="">Nombre del Producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="Descripcion del producto">
                        <label for="">Descripcion del producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="Añadir Marca" name="nombreProducto">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

