<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/header.css">
    <link rel="stylesheet" href="./../public/css/configuracion.css">
    <link rel="stylesheet" href="./../public/css/footer.css">
    <link rel="stylesheet" href="./../public/css/carrito.css">
    <script src="https://kit.fontawesome.com/ba1cd93264.js" crossorigin="anonymous"></script>
    <title>Configuración</title>
</head>
<body>

    <section class="seccion-header">
        <div class="sec-header">
            <div id="btn-menu" class="header-items">
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>                
            </div>
            <div class="header-items titulo-inicio">Building Technology</div>
            <div class="header-items">
                <form class="form-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                <button type="submit" class="btn-buscar" name="submits"><img src="./../public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                </form>
            </div>
            <div id="contenedorCarrito" class="header-items btn-img"><i class="fa-solid fa-cart-shopping"></i></div>
        </div>
        <div class="contenedor-barra-navegacion cerrar">
            <div class="menu-contenedor">
                <div class="navegacion-content">
                    <button id="btn-close" class="btn-close">
                        <div class="btn-x x-1"></div>
                        <div class="btn-x x-2"></div>
                        <div class="btn-x x-3"></div>
                    </button>
                    <hr class="hr">
                    <form class="form-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <input type="text" id="barra-buscar" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                        <button type="submit" class="btn-buscar" name="submits"><img src="./../public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                    </form>
                    <div class="menu-categorias">
                        <button class="btn-categoria"><a href="./../index.php" title="Visitar Productos">Inicio</a></button>
                        <button class="btn-categoria"><a href="" title="">Promociones</a></button>             
                        <button class="btn-categoria"><a href="" title="">Lo mas vendido</a></button>             
                        <button class="btn-categoria"><a href="" title="">Marcas</a></button>             
                        <button class="btn-categoria"><a href="" title="">Para ti</a></button>             
                        <button class="btn-categoria"><a href="./../index.php#formularioContacto" title="Nuestro Formulario">Contacto</a></button>             
                    </div>
                </div>
                <div class="navegacion-usuario">
                    <button class="btn-panel"><a href="./panelControl.php">PANEL DE CONTROL</a></button>
                    <button class="btn-cerrar-session"><a href="">CERRAR SESION</a></button>
                </div>
            </div>
        </div>

        <div class="content-carrito">
            <div class="card-carrito"> <!-- DISPLAY FLEX -->
                <div class="item-carrito header-carrito">
                    <div class="title-carrito">
                        <span>Tu carrito esta vacio</span>
                    </div>
                    <div id="btn-close-carrito" class="btn-carrito-cerrar">
                        <button id="btn-close" class="btn-close">
                            <div class="btn-x x-1"></div>
                            <div class="btn-x x-2"></div>
                            <div class="btn-x x-3"></div>
                        </button>
                    </div>
                </div>
                
                <!-- // * CONTENIDO DEL CARRITO -->
                <div class="item-carrito main-carrito">
                    <!--START Contenido del carrito -->

                    <!-- // ? CARRITO VACIO -->
                    <div class="carrito-vacio">
                        <div class="item-carrito-vacio img-carrito">
                            <img src="./../public/img/carro-vacio.png" alt="Error al cargar la imagen" title="Carrito Vacio">
                        </div>
                        <div class="item-carrito-vacio">
                            TU CARRITO ESTA VACIO
                        </div>
                    </div>

                    <!-- // ? CARRITO CON PRODUCTOS -->
                    <!-- <div class="carrito-productos carrito-activo">
                        <div class="producto-carrito">
                            <div class="item-carrito-producto item-producto-1">
                                <div class="img-producto-carrito">
                                    <img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error al cargar la imagen">
                                </div>
                                <div class="carrito-title-producto">
                                    <p class="title-prod">Suero Reconstructor</p>
                                    <p class="desc-prod">Suero que ayuda a fortalece el cab...</p>
                                    <p class="import">$ 13,000.00</p>
                                </div>
                            </div>
                            <div class="item-carrito-producto item-producto-2">
                                <button>Eliminar</button>
                                <select name="cantidad" id="cantidad">
                                    <option value="1">1 Pieza.</option>
                                    <option value="2">2 Piezas</option>
                                    <option value="3">3 Piezas</option>
                                    <option value="4">4 Piezas</option>
                                    <option value="5">5 Piezas</option>
                                    <option value="6">6 Piezas</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- // ? CARRITO DETOS DE ENVIO -->
                    <!-- <div class="contenido-form">
                        <form action="" method="post">
                            <div class="contenedor-input">
                                <input type="text" name="codigoPostal" id="codigoPostal" placeholder="Codigo Postal">
                            </div>
                            <div class="contenedor-input">
                                <select name="estado" id="estado">
                                    <option value="">Selecciona Estado</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <select name="municipio" id="municipio">
                                    <option value="OTRO MUNICIPIO">Selecciona Municipio</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <select name="colonia" id="colonia">
                                    <option value="OTRO COLONIA">Selecciona Colonia</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="nInterior" id="nInterior" placeholder="Num. Interior">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="nExterior" id="nExterior" placeholder="Num. Exterior">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="calleCruze1" id="calleCruze1" placeholder="Calle cruze 1">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="calleCruze2" id="calleCruze2" placeholder="Calle cruze 2">
                            </div>
                            <div class="contenedor-input">
                                <input type="email" placeholder="Correo Electronico" tabindex="1" name="email" id="email" placeholder="">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="email" id="name" placeholder="Nombre Completo">
                            </div>
                        </form>
                    </div> -->

                    <!--END Contenido del carrito -->
                </div>
                <!--  // * FOOTER CARRITO -->
                <div class="item-carrito action-btn">
                    <!-- <div class="content-total">
                        <span class="title-total">Direccion Envio</span>
                        <span class="cantidad-total"></span>
                    </div>
                    <div class="content-total">
                        <span class="title-descuento">Nombre</span>
                        <span class="cantidad-descuento">Marco Antonio</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Direccion</span>
                        <span class="cantidad-subtotal"> Calle San pablo 78</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Colonia</span>
                        <span class="cantidad-subtotal"> La pacifico</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Municipio</span>
                        <span class="cantidad-subtotal"> El salto</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Estado</span>
                        <span class="cantidad-subtotal"> Jalisco</span>
                    </div> -->
                    <!-- <button class="btn-comprar">COMPRAR</button> -->
                    <!-- <button class="btn-info-envio">Enviar mi Pedido</button> -->
                    <button class="btn-ir-comprar">IR A PRODUCTOS</button>
                </div>
            </div>
        </div>

    </section>

    <!--  Seccion de Configuracion -->

    <div class="contenedor-flex">
        <div class="contenedor-formulario">
            <h2>Completar tus datos</h2>
            <form id="formulario-login" action="" method="post">
                <div class="item-form">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <label for="">Ingresa tu nombre </label>
                </div>
                <div class="item-form">
                    <input type="text" name="apellido" placeholder="Apellidos">
                    <label for="">Ingresa tu apellido </label>
                </div>
                <div class="item-form">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <label for="">Ingresa tu dirección </label>
                </div>
                <div class="item-form">
                    <input type="text" name="numeroExterior" placeholder="Eje: 45690">
                    <label for="">Numero Exterior </label>
                </div>
                <div class="item-form">
                    <input type="text" name="numeroInterior" placeholder="Eje: 45690">
                    <label for="">Numero Interior </label>
                </div>
                <div class="item-form">
                    <input type="text" name="cp" placeholder="Eje: 45690">
                    <label for="">Codigo Postal </label>
                </div>
                <div class="item-form">
                    <input type="text" name="calle1" placeholder="Eje: Catarino Muñoz">
                    <label for="">Cruze calle 1</label>
                </div>
                <div class="item-form">
                    <input type="text" name="calle2" placeholder="Eje: Jose luis lupercio">
                    <label for="">Cruze calle 2</label>
                </div>
                <div class="item-form">
                    <input type="text" name="municipio" placeholder="Municipio">
                    <label for="">Ingresa tu Municipio </label>
                </div>
                <div class="item-form">
                    <input type="text" name="colonia" placeholder="Colonia">
                    <label for="">Ingresa tu Colonia </label>
                </div>
                <div class="item-form">
                    <input type="text" name="estado" placeholder="Estado">
                    <label for="">Ingresa tu Estado </label>
                </div>
                <div class="item-form">
                    <input type="text" name="pais" placeholder="Pais">
                    <label for="">Ingresa tu Pais </label>
                </div>
                <div class="item-form">
                    <input type="text" name="lada" placeholder="+ 52">
                    <label for="">Lada </label>
                </div>
                <div class="item-form">
                    <input type="text" name="celular" placeholder="Eje: 3310453525">
                    <label for="">Celular </label>
                </div>
                <div class="item-form">
                    <input type="text" name="rfc" placeholder="RFC">
                    <label for="">RFC </label>
                </div>
                <div class="item-form">
                    <input type="text" name="razonSocial" placeholder="Razon Social">
                    <label for="">Razon Social </label>
                </div>
                <div class="item-form">
                    <input type="submit" name="btn-login" value="Guardar">
                </div>
            </form>
        </div>
    </div>

    <!-- Fin Seccion de Configuracion -->

    <footer>
        <div class="content-footer">
            <div class="item-content-footer">
                <h4>Contacto</h4>
                <hr class="item-hr-footer">
                <a href="" title="">+52 3320525516</a>
                <a href="" title="">+52 3320525516</a>
                <a href="" title="">marcoricovaladez172@gmail.com</a>
                <a href="" title="" target="_blank">Whastapp</a>
            </div>
            <div class="item-content-footer">
                <h4>Categorias</h4>
                <hr class="item-hr-footer">
                <a href="" title="">Inicio</a>
                <a href="" title="">Promociones</a>
                <a href="" title="">Lo mas vendido</a>
                <a href="" title="">Marcas</a>
                <a href="" title="">Carrito</a>
            </div>
            <div class="item-content-footer">
                <h4>Redes Sociales</h4>
                <hr class="item-hr-footer">
                <a href="" title="Facebook" target="_blank">Facebook</a>
                <a href="" title="Instagram" target="_blank">Instagram</a>
                <a href="" title="Twitter" target="_blank">Twitter</a>
                <a href="" title="Whastapp" target="_blank">Whastapp</a>
            </div>
            <div class="item-content-footer">
                <h4>¿Quien hizo este sitio web?</h4>
                <hr class="item-hr-footer">
                <a href="" title="Cotiza tu web" target="_blank">Building Technology</a>
                <a href="" title="Revisa nuestros servicios" target="_blank">Nuestros Servicios</a>
                <a href="" title="">+52 3320525516</a>
                <a href="" title="Facebook"><img src="" alt=""></a>
            </div>
        </div>
        <hr class="item-hr-footer">
        <div class="huella-buil">Sitio web elaborado por &copy; <a href="" target="_blank">Building Technology</a> para la empresa Tu negocio.com</div>
    </footer>  
    <script src="./../javascript/app.js"></script>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/header.css">
    <link rel="stylesheet" href="./../public/css/configuracion.css">
    <link rel="stylesheet" href="./../public/css/footer.css">
    <link rel="stylesheet" href="./../public/css/carrito.css">
    <script src="https://kit.fontawesome.com/ba1cd93264.js" crossorigin="anonymous"></script>
    <title>Configuración</title>
</head>
<body>

    <section class="seccion-header">
        <div class="sec-header">
            <div id="btn-menu" class="header-items">
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>                
            </div>
            <div class="header-items titulo-inicio">Building Technology</div>
            <div class="header-items">
                <form class="form-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                <button type="submit" class="btn-buscar" name="submits"><img src="./../public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                </form>
            </div>
            <div id="contenedorCarrito" class="header-items btn-img"><i class="fa-solid fa-cart-shopping"></i></div>
        </div>
        <div class="contenedor-barra-navegacion cerrar">
            <div class="menu-contenedor">
                <div class="navegacion-content">
                    <button id="btn-close" class="btn-close">
                        <div class="btn-x x-1"></div>
                        <div class="btn-x x-2"></div>
                        <div class="btn-x x-3"></div>
                    </button>
                    <hr class="hr">
                    <form class="form-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <input type="text" id="barra-buscar" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                        <button type="submit" class="btn-buscar" name="submits"><img src="./../public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                    </form>
                    <div class="menu-categorias">
                        <button class="btn-categoria"><a href="./../index.php" title="Visitar Productos">Inicio</a></button>
                        <button class="btn-categoria"><a href="" title="">Promociones</a></button>             
                        <button class="btn-categoria"><a href="" title="">Lo mas vendido</a></button>             
                        <button class="btn-categoria"><a href="" title="">Marcas</a></button>             
                        <button class="btn-categoria"><a href="" title="">Para ti</a></button>             
                        <button class="btn-categoria"><a href="./../index.php#formularioContacto" title="Nuestro Formulario">Contacto</a></button>             
                    </div>
                </div>
                <div class="navegacion-usuario">
                    <button class="btn-panel"><a href="./panelControl.php">PANEL DE CONTROL</a></button>
                    <button class="btn-cerrar-session"><a href="">CERRAR SESION</a></button>
                </div>
            </div>
        </div>

        <div class="content-carrito">
            <div class="card-carrito"> <!-- DISPLAY FLEX -->
                <div class="item-carrito header-carrito">
                    <div class="title-carrito">
                        <span>Tu carrito esta vacio</span>
                    </div>
                    <div id="btn-close-carrito" class="btn-carrito-cerrar">
                        <button id="btn-close" class="btn-close">
                            <div class="btn-x x-1"></div>
                            <div class="btn-x x-2"></div>
                            <div class="btn-x x-3"></div>
                        </button>
                    </div>
                </div>
                
                <!-- // * CONTENIDO DEL CARRITO -->
                <div class="item-carrito main-carrito">
                    <!--START Contenido del carrito -->

                    <!-- // ? CARRITO VACIO -->
                    <div class="carrito-vacio">
                        <div class="item-carrito-vacio img-carrito">
                            <img src="./../public/img/carro-vacio.png" alt="Error al cargar la imagen" title="Carrito Vacio">
                        </div>
                        <div class="item-carrito-vacio">
                            TU CARRITO ESTA VACIO
                        </div>
                    </div>

                    <!-- // ? CARRITO CON PRODUCTOS -->
                    <!-- <div class="carrito-productos carrito-activo">
                        <div class="producto-carrito">
                            <div class="item-carrito-producto item-producto-1">
                                <div class="img-producto-carrito">
                                    <img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error al cargar la imagen">
                                </div>
                                <div class="carrito-title-producto">
                                    <p class="title-prod">Suero Reconstructor</p>
                                    <p class="desc-prod">Suero que ayuda a fortalece el cab...</p>
                                    <p class="import">$ 13,000.00</p>
                                </div>
                            </div>
                            <div class="item-carrito-producto item-producto-2">
                                <button>Eliminar</button>
                                <select name="cantidad" id="cantidad">
                                    <option value="1">1 Pieza.</option>
                                    <option value="2">2 Piezas</option>
                                    <option value="3">3 Piezas</option>
                                    <option value="4">4 Piezas</option>
                                    <option value="5">5 Piezas</option>
                                    <option value="6">6 Piezas</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- // ? CARRITO DETOS DE ENVIO -->
                    <!-- <div class="contenido-form">
                        <form action="" method="post">
                            <div class="contenedor-input">
                                <input type="text" name="codigoPostal" id="codigoPostal" placeholder="Codigo Postal">
                            </div>
                            <div class="contenedor-input">
                                <select name="estado" id="estado">
                                    <option value="">Selecciona Estado</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <select name="municipio" id="municipio">
                                    <option value="OTRO MUNICIPIO">Selecciona Municipio</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <select name="colonia" id="colonia">
                                    <option value="OTRO COLONIA">Selecciona Colonia</option>
                                </select>
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="nInterior" id="nInterior" placeholder="Num. Interior">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="nExterior" id="nExterior" placeholder="Num. Exterior">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="calleCruze1" id="calleCruze1" placeholder="Calle cruze 1">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="calleCruze2" id="calleCruze2" placeholder="Calle cruze 2">
                            </div>
                            <div class="contenedor-input">
                                <input type="email" placeholder="Correo Electronico" tabindex="1" name="email" id="email" placeholder="">
                            </div>
                            <div class="contenedor-input">
                                <input type="text" name="email" id="name" placeholder="Nombre Completo">
                            </div>
                        </form>
                    </div> -->

                    <!--END Contenido del carrito -->
                </div>
                <!--  // * FOOTER CARRITO -->
                <div class="item-carrito action-btn">
                    <!-- <div class="content-total">
                        <span class="title-total">Direccion Envio</span>
                        <span class="cantidad-total"></span>
                    </div>
                    <div class="content-total">
                        <span class="title-descuento">Nombre</span>
                        <span class="cantidad-descuento">Marco Antonio</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Direccion</span>
                        <span class="cantidad-subtotal"> Calle San pablo 78</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Colonia</span>
                        <span class="cantidad-subtotal"> La pacifico</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Municipio</span>
                        <span class="cantidad-subtotal"> El salto</span>
                    </div>
                    <div class="content-total">
                        <span class="title-subtotal">Estado</span>
                        <span class="cantidad-subtotal"> Jalisco</span>
                    </div> -->
                    <!-- <button class="btn-comprar">COMPRAR</button> -->
                    <!-- <button class="btn-info-envio">Enviar mi Pedido</button> -->
                    <button class="btn-ir-comprar">IR A PRODUCTOS</button>
                </div>
            </div>
        </div>

    </section>

    <!--  Seccion de Configuracion -->

    <div class="contenedor-flex">
        <div class="contenedor-formulario">
            <h2>Completar tus datos</h2>
            <form id="formulario-login" action="" method="post">
                <div class="item-form">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <label for="">Ingresa tu nombre </label>
                </div>
                <div class="item-form">
                    <input type="text" name="apellido" placeholder="Apellidos">
                    <label for="">Ingresa tu apellido </label>
                </div>
                <div class="item-form">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <label for="">Ingresa tu dirección </label>
                </div>
                <div class="item-form">
                    <input type="text" name="numeroExterior" placeholder="Eje: 45690">
                    <label for="">Numero Exterior </label>
                </div>
                <div class="item-form">
                    <input type="text" name="numeroInterior" placeholder="Eje: 45690">
                    <label for="">Numero Interior </label>
                </div>
                <div class="item-form">
                    <input type="text" name="cp" placeholder="Eje: 45690">
                    <label for="">Codigo Postal </label>
                </div>
                <div class="item-form">
                    <input type="text" name="calle1" placeholder="Eje: Catarino Muñoz">
                    <label for="">Cruze calle 1</label>
                </div>
                <div class="item-form">
                    <input type="text" name="calle2" placeholder="Eje: Jose luis lupercio">
                    <label for="">Cruze calle 2</label>
                </div>
                <div class="item-form">
                    <input type="text" name="municipio" placeholder="Municipio">
                    <label for="">Ingresa tu Municipio </label>
                </div>
                <div class="item-form">
                    <input type="text" name="colonia" placeholder="Colonia">
                    <label for="">Ingresa tu Colonia </label>
                </div>
                <div class="item-form">
                    <input type="text" name="estado" placeholder="Estado">
                    <label for="">Ingresa tu Estado </label>
                </div>
                <div class="item-form">
                    <input type="text" name="pais" placeholder="Pais">
                    <label for="">Ingresa tu Pais </label>
                </div>
                <div class="item-form">
                    <input type="text" name="lada" placeholder="+ 52">
                    <label for="">Lada </label>
                </div>
                <div class="item-form">
                    <input type="text" name="celular" placeholder="Eje: 3310453525">
                    <label for="">Celular </label>
                </div>
                <div class="item-form">
                    <input type="text" name="rfc" placeholder="RFC">
                    <label for="">RFC </label>
                </div>
                <div class="item-form">
                    <input type="text" name="razonSocial" placeholder="Razon Social">
                    <label for="">Razon Social </label>
                </div>
                <div class="item-form">
                    <input type="submit" name="btn-login" value="Guardar">
                </div>
            </form>
        </div>
    </div>

    <!-- Fin Seccion de Configuracion -->

    <footer>
        <div class="content-footer">
            <div class="item-content-footer">
                <h4>Contacto</h4>
                <hr class="item-hr-footer">
                <a href="" title="">+52 3320525516</a>
                <a href="" title="">+52 3320525516</a>
                <a href="" title="">marcoricovaladez172@gmail.com</a>
                <a href="" title="" target="_blank">Whastapp</a>
            </div>
            <div class="item-content-footer">
                <h4>Categorias</h4>
                <hr class="item-hr-footer">
                <a href="" title="">Inicio</a>
                <a href="" title="">Promociones</a>
                <a href="" title="">Lo mas vendido</a>
                <a href="" title="">Marcas</a>
                <a href="" title="">Carrito</a>
            </div>
            <div class="item-content-footer">
                <h4>Redes Sociales</h4>
                <hr class="item-hr-footer">
                <a href="" title="Facebook" target="_blank">Facebook</a>
                <a href="" title="Instagram" target="_blank">Instagram</a>
                <a href="" title="Twitter" target="_blank">Twitter</a>
                <a href="" title="Whastapp" target="_blank">Whastapp</a>
            </div>
            <div class="item-content-footer">
                <h4>¿Quien hizo este sitio web?</h4>
                <hr class="item-hr-footer">
                <a href="" title="Cotiza tu web" target="_blank">Building Technology</a>
                <a href="" title="Revisa nuestros servicios" target="_blank">Nuestros Servicios</a>
                <a href="" title="">+52 3320525516</a>
                <a href="" title="Facebook"><img src="" alt=""></a>
            </div>
        </div>
        <hr class="item-hr-footer">
        <div class="huella-buil">Sitio web elaborado por &copy; <a href="" target="_blank">Building Technology</a> para la empresa Tu negocio.com</div>
    </footer>  
    <script src="./../javascript/app.js"></script>

</body>
>>>>>>> DevMarcoRico
</html>