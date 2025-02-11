<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/panelControl.css">
    <title>Panel de Control</title>
</head>
<body>

    <div class="content-bar-cpanel">
    <button id="btn-" title="Ir a mi cuenta" class="btn btn-nav">MR</button>
            <nav class="bar-navegation">
                <button id="btn-agregar" title="" class="btn btn-nav"><img src="./../public/img/agregar.png" alt="Error 404" title="Agregar Producto"></button>
                <button id="btn-marca" title="" class="btn btn-nav"><img src="./../public/img/etiqueta.png" alt="Error 404" title="Agregar Marca"></button>
                <button id="btn-categoria" title="" class="btn btn-nav"><img src="./../public/img/solicitud.png" alt="Error 404" title="Agregar Categoria"></button>
                <button id="btn-catalogo" title="" class="btn btn-nav"><img src="./../public/img/inventario.png" alt="Error 404" title="Ver mis Productos"></button>
                <button id="btn-pedidos" title="" class="btn btn-nav"><img src="./../public/img/buscar-pedido.png" alt="Error 404" title="Ver Pedidos"></button>
                </nav> 
            <button id="btn-salir" title="" class="btn btn-close"><img src="./../public/img/boton-salir.png" alt="Error 404" title="Salir del Panel de Control"></button>
    </div>
    <!-- Este sera el content de flex -->
    <div class="contenedor-cpanel">
        <div class="item-cpanel content">
            <h3 id="title-proceso">Bienvenido al Panel de Control</h3>
            <div id="content-navegation" class="item-content">
                
            <div id="content-formulario" class="ocultar">
                <form id="form-add" action="" method="post">
                        <div class="item-form-input">
                            <input type="text" name="nombreProducto" placeholder="Nombre del producto">
                            <label for="">nombre</label>
                        </div>
                        <div class="item-form-input">
                            <input type="text" name="desProducto" placeholder="Descripcion del producto">
                            <label for="">Descripcion del producto</label>
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
                            <select name="seleccionCategoria" id="select-marca">
                                <option value="ASUS">ASUS</option>
                                <option value="PLACENCIA">PLACENCIA</option>
                                <option value="APPLE">APPLE</option>
                            </select>
                            <label for="">SELECCIONA LA CATEGORIA</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="stock" placeholder="STOCK">
                            <label for="">Cantidad en Inventario</label>
                        </div>
                        <div class="item-form-input">
                            <input type="file" name="imagen" placeholder="Añadir imagen">
                            <label for="">Añadir imagen</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarProducto" type="checkbox" name="activarProducto">
                            <label for="activarProducto">Activar Producto</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarPromo" type="checkbox" name="activarPromo">
                            <label for="activarPromo">Activar Producto</label>
                        </div>
                        <div class="item-form-input">
                            <input type="text" name="promocion" placeholder="Dar en promocion tu producto">
                            <label for="">Promocion</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="monto" placeholder="Monto de tu producto">
                            <label for="">Monto</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="descuento_1" placeholder="Descuento_1">
                            <label for="">Descuento 1</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="descuento_2" placeholder="Descuento_2">
                            <label for="">Descuento 2</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarProducto" type="checkbox" name="activarProducto">
                            <label for="activarProducto">Incluir IVA</label>
                        </div>
                        <div class="item-form-input">
                            <input type="submit" value="Añadir Producto" name="submit" placeholder="">
                        </div>
                </form> 
            </div>

            <div id="content-form-brand" class="ocultar">
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <select name="seleccionMarca" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA MARCA</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreMarca" placeholder="Descripcion del producto">
                        <label for="">Nombre de la Marca</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA MARCA" name="actualizarMarca" placeholder="NUEVO PRODUCTO">
                    </div>
                </form> 
            </div>

            <div id="content-form-cate" class="ocultar">
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <select name="seleccionCategoria" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA categoria</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreCategoria" placeholder="Nombre de Categoria">
                        <label for="">Nombre de Categoria</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA CATEGORIA" name="actualizarCategoria" placeholder="NUEVO PRODUCTO">
                    </div>
                </form> 
            </div>

            <div id="content-producto" class="contenedor-catalogo ocultar">
                    
                <div class="content-buttons">
                    <form id="catalogo" action="">
                        <div>
                            <input id="az" name="ordenarAZ" type="checkbox" value="Ordenar A-Z">
                            <label for="az">Ordenar A-Z</label>
                        </div>
                        <div>
                            <input id="za" name="ordenarZA" type="checkbox" value="Ordenar Z-A">
                            <label for="za">Ordenar Z-A</label>
                        </div>
                        <div>
                            <input id="MasVendido" name="MasVendido" type="checkbox" value="Lo mas vendido">
                            <label for="MasVendido">Lo mas Vendido</label>
                        </div>
                        <div>
                            <input id="productosActivos" name="productosActivos" type="checkbox" value="Productos Activos">
                            <label for="productosActivos">Productos Activos</label>
                        </div>
                        <div>
                            <input id="promocionesActivas" name="promocionesActivos" type="checkbox" value="Productos Activos">
                            <label for="promocionesActivas">Promociones Activas</label>
                        </div>
                        <input type="range" name="rangoPrecio" id="rango" min="0" max="5000" >
                        <input type="text" name="buscar" id="buscar" placeholder="Buscar Producto" >
                        <input type="button" value="Buscar">
                    </form>
                </div>
                <table id="table-catalogo">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Promocion</th>
                        <th>Monto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>0237</td>
                        <td>Television 50"</td>
                        <td>SAMSUNG</td>
                        <td>Tecnologia</td>
                        <td>124</td>
                        <td><span class="active">Activo</span></td>
                        <td><span class="inactive">Inactivo</span></td>
                        <td>$ 1400.99</td>
                        <td><button class="btnEditar">Editar</button></td>
                        <td><button class="btnEliminar">Eliminar</button></td>
                    </tr>
                </table>

                </div>

            </div>

            <div id="content-pedido" class="contenedor-catalogo ocultar">
                <div class="content-buttons">
                    <form id="catalogo" action="">
                        <div>
                            <input id="az" name="ordenarAZ" type="checkbox" value="Ordenar A-Z">
                            <label for="az">Ordenar A-Z</label>
                        </div>
                        <div>
                            <input id="za" name="ordenarZA" type="checkbox" value="Ordenar Z-A">
                            <label for="za">Ordenar Z-A</label>
                        </div>
                        <div>
                            <input id="MasVendido" name="MasVendido" type="checkbox" value="Lo mas vendido">
                            <label for="MasVendido">Lo mas Vendido</label>
                        </div>
                        <div>
                            <input id="productosActivos" name="productosActivos" type="checkbox" value="Productos Activos">
                            <label for="productosActivos">Productos Activos</label>
                        </div>
                        <div>
                            <input id="promocionesActivas" name="promocionesActivos" type="checkbox" value="Productos Activos">
                            <label for="promocionesActivas">Promociones Activas</label>
                        </div>
                        <input type="range" name="rangoPrecio" id="rango" min="0" max="5000" >
                        <input type="text" name="buscar" id="buscar" placeholder="Buscar Producto" >
                        <input type="button" value="Buscar">
                    </form>
                </div>
                <table id="table-catalogo">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Promocion</th>
                        <th>Monto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>0237</td>
                        <td>Television 50"</td>
                        <td>SAMSUNG</td>
                        <td>Tecnologia</td>
                        <td>124</td>
                        <td><span class="active">Activo</span></td>
                        <td><span class="inactive">Inactivo</span></td>
                        <td>$ 1400.99</td>
                        <td><button class="btnEditar">Editar</button></td>
                        <td><button class="btnEliminar">Eliminar</button></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <script src="../javascript/pnelControl.js"></script>
</body>
</html>

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/panelControl.css">
    <title>Panel de Control</title>
</head>
<body>

    <div class="content-bar-cpanel">
    <button id="btn-" title="Ir a mi cuenta" class="btn btn-nav">MR</button>
            <nav class="bar-navegation">
                <button id="btn-agregar" title="" class="btn btn-nav"><img src="./../public/img/agregar.png" alt="Error 404" title="Agregar Producto"></button>
                <button id="btn-marca" title="" class="btn btn-nav"><img src="./../public/img/etiqueta.png" alt="Error 404" title="Agregar Marca"></button>
                <button id="btn-categoria" title="" class="btn btn-nav"><img src="./../public/img/solicitud.png" alt="Error 404" title="Agregar Categoria"></button>
                <button id="btn-catalogo" title="" class="btn btn-nav"><img src="./../public/img/inventario.png" alt="Error 404" title="Ver mis Productos"></button>
                <button id="btn-pedidos" title="" class="btn btn-nav"><img src="./../public/img/buscar-pedido.png" alt="Error 404" title="Ver Pedidos"></button>
                </nav> 
            <button id="btn-salir" title="" class="btn btn-close"><img src="./../public/img/boton-salir.png" alt="Error 404" title="Salir del Panel de Control"></button>
    </div>
    <!-- Este sera el content de flex -->
    <div class="contenedor-cpanel">
        <div class="item-cpanel content">
            <h3 id="title-proceso">Bienvenido al Panel de Control</h3>
            <div id="content-navegation" class="item-content">
                
            <div id="content-formulario" class="ocultar">
                <form id="form-add" action="" method="post">
                        <div class="item-form-input">
                            <input type="text" name="nombreProducto" placeholder="Nombre del producto">
                            <label for="">nombre</label>
                        </div>
                        <div class="item-form-input">
                            <input type="text" name="desProducto" placeholder="Descripcion del producto">
                            <label for="">Descripcion del producto</label>
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
                            <select name="seleccionCategoria" id="select-marca">
                                <option value="ASUS">ASUS</option>
                                <option value="PLACENCIA">PLACENCIA</option>
                                <option value="APPLE">APPLE</option>
                            </select>
                            <label for="">SELECCIONA LA CATEGORIA</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="stock" placeholder="STOCK">
                            <label for="">Cantidad en Inventario</label>
                        </div>
                        <div class="item-form-input">
                            <input type="file" name="imagen" placeholder="Añadir imagen">
                            <label for="">Añadir imagen</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarProducto" type="checkbox" name="activarProducto">
                            <label for="activarProducto">Activar Producto</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarPromo" type="checkbox" name="activarPromo">
                            <label for="activarPromo">Activar Producto</label>
                        </div>
                        <div class="item-form-input">
                            <input type="text" name="promocion" placeholder="Dar en promocion tu producto">
                            <label for="">Promocion</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="monto" placeholder="Monto de tu producto">
                            <label for="">Monto</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="descuento_1" placeholder="Descuento_1">
                            <label for="">Descuento 1</label>
                        </div>
                        <div class="item-form-input">
                            <input type="number" name="descuento_2" placeholder="Descuento_2">
                            <label for="">Descuento 2</label>
                        </div>
                        <div class="item-form-input content-check">
                            <input id="activarProducto" type="checkbox" name="activarProducto">
                            <label for="activarProducto">Incluir IVA</label>
                        </div>
                        <div class="item-form-input">
                            <input type="submit" value="Añadir Producto" name="submit" placeholder="">
                        </div>
                </form> 
            </div>

            <div id="content-form-brand" class="ocultar">
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <select name="seleccionMarca" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA MARCA</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreMarca" placeholder="Descripcion del producto">
                        <label for="">Nombre de la Marca</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA MARCA" name="actualizarMarca" placeholder="NUEVO PRODUCTO">
                    </div>
                </form> 
            </div>

            <div id="content-form-cate" class="ocultar">
                <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <select name="seleccionCategoria" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA categoria</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreCategoria" placeholder="Nombre de Categoria">
                        <label for="">Nombre de Categoria</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA CATEGORIA" name="actualizarCategoria" placeholder="NUEVO PRODUCTO">
                    </div>
                </form> 
            </div>

            <div id="content-producto" class="contenedor-catalogo ocultar">
                    
                <div class="content-buttons">
                    <form id="catalogo" action="">
                        <div>
                            <input id="az" name="ordenarAZ" type="checkbox" value="Ordenar A-Z">
                            <label for="az">Ordenar A-Z</label>
                        </div>
                        <div>
                            <input id="za" name="ordenarZA" type="checkbox" value="Ordenar Z-A">
                            <label for="za">Ordenar Z-A</label>
                        </div>
                        <div>
                            <input id="MasVendido" name="MasVendido" type="checkbox" value="Lo mas vendido">
                            <label for="MasVendido">Lo mas Vendido</label>
                        </div>
                        <div>
                            <input id="productosActivos" name="productosActivos" type="checkbox" value="Productos Activos">
                            <label for="productosActivos">Productos Activos</label>
                        </div>
                        <div>
                            <input id="promocionesActivas" name="promocionesActivos" type="checkbox" value="Productos Activos">
                            <label for="promocionesActivas">Promociones Activas</label>
                        </div>
                        <input type="range" name="rangoPrecio" id="rango" min="0" max="5000" >
                        <input type="text" name="buscar" id="buscar" placeholder="Buscar Producto" >
                        <input type="button" value="Buscar">
                    </form>
                </div>
                <table id="table-catalogo">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Promocion</th>
                        <th>Monto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>0237</td>
                        <td>Television 50"</td>
                        <td>SAMSUNG</td>
                        <td>Tecnologia</td>
                        <td>124</td>
                        <td><span class="active">Activo</span></td>
                        <td><span class="inactive">Inactivo</span></td>
                        <td>$ 1400.99</td>
                        <td><button class="btnEditar">Editar</button></td>
                        <td><button class="btnEliminar">Eliminar</button></td>
                    </tr>
                </table>

                </div>

            </div>

            <div id="content-pedido" class="contenedor-catalogo ocultar">
                <div class="content-buttons">
                    <form id="catalogo" action="">
                        <div>
                            <input id="az" name="ordenarAZ" type="checkbox" value="Ordenar A-Z">
                            <label for="az">Ordenar A-Z</label>
                        </div>
                        <div>
                            <input id="za" name="ordenarZA" type="checkbox" value="Ordenar Z-A">
                            <label for="za">Ordenar Z-A</label>
                        </div>
                        <div>
                            <input id="MasVendido" name="MasVendido" type="checkbox" value="Lo mas vendido">
                            <label for="MasVendido">Lo mas Vendido</label>
                        </div>
                        <div>
                            <input id="productosActivos" name="productosActivos" type="checkbox" value="Productos Activos">
                            <label for="productosActivos">Productos Activos</label>
                        </div>
                        <div>
                            <input id="promocionesActivas" name="promocionesActivos" type="checkbox" value="Productos Activos">
                            <label for="promocionesActivas">Promociones Activas</label>
                        </div>
                        <input type="range" name="rangoPrecio" id="rango" min="0" max="5000" >
                        <input type="text" name="buscar" id="buscar" placeholder="Buscar Producto" >
                        <input type="button" value="Buscar">
                    </form>
                </div>
                <table id="table-catalogo">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Promocion</th>
                        <th>Monto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>0237</td>
                        <td>Television 50"</td>
                        <td>SAMSUNG</td>
                        <td>Tecnologia</td>
                        <td>124</td>
                        <td><span class="active">Activo</span></td>
                        <td><span class="inactive">Inactivo</span></td>
                        <td>$ 1400.99</td>
                        <td><button class="btnEditar">Editar</button></td>
                        <td><button class="btnEliminar">Eliminar</button></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <script src="../javascript/pnelControl.js"></script>
</body>
</html>

>>>>>>> DevMarcoRico
