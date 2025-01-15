<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/header.css">
    <link rel="stylesheet" href="./../css/configuracion.css">
    <link rel="stylesheet" href="./../css/footer.css">
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
                <button type="submit" class="btn-buscar" name="submits"><img src="./../img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
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
                        <button type="submit" class="btn-buscar" name="submits"><img src="./../img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
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
        <div class="contenedor-carrito">
            <div class="menu-contenedor">
                <div class="navegacion-content">
                    <button id="btn-close-carrito" class="btn-close">
                        <div class="btn-x x-1"></div>
                        <div class="btn-x x-2"></div>
                        <div class="btn-x x-3"></div>
                    </button>
                    <hr class="hr">
                    <div class="contenido-del-carrito">
                        <!-- Agregar contenido del carrito-->

                        <!-- Inyectar codigo html con javaScript -->

                        <!-- Fin del contenido del carrito-->
                    </div>
                </div>
                <div class="navegacion-usuario">
                    <button class="btn-panel"><a href="">Ir al Carrito</a></button>
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
</html>