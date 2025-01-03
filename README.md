# TiendaOnline

AGREGAR PRODUCTO: En el panel de control se debera agregar el siguiente codigo con scripting javaScript extrayendo desde un json
    <form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="Descripcion del producto">
                        <label for="">Descripcion del producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="number" name="stock" placeholder="STOCK">
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
                    <div class="item-form-input content-check">
                        <input id="activarProducto" type="checkbox" name="nombreProducto">
                        <label for="activarProducto">Activar Producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="Añadir Producto" name="submit" placeholder="">
                    </div>
    </form> 

========================================================================================
AGREGAR MARCA: Para agregar marca el formulario debera 

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
                        <input type="text" name="nombreProducto" placeholder="Descripcion del producto">
                        <label for="">Descripcion del producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA MARCA" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                    </div>
</form> 

============================================================================================
AGREGAR CATEGORIA: Para agregar categoria el formulario debera 

<form id="form-add" action="" method="post">
                    <div class="item-form-input">
                        <select name="seleccionMarca" id="select-marca">
                            <option value="ASUS">ASUS</option>
                            <option value="PLACENCIA">PLACENCIA</option>
                            <option value="APPLE">APPLE</option>
                        </select>
                        <label for="">SELECCIONA LA categoria</label>
                    </div>
                    <div class="item-form-input">
                        <input type="text" name="nombreProducto" placeholder="Descripcion del producto">
                        <label for="">Descripcion del producto</label>
                    </div>
                    <div class="item-form-input">
                        <input type="submit" value="NUEVA MARCA" name="nombreProducto" placeholder="NUEVO PRODUCTO">
                    </div>
</form> 

===========================================================================================================
AGREGAR FORMULARIO & TABLAS EN PEDIDOS & PRODUCTOS

<div class="contenedor-catalogo">
                    
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