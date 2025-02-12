<?php

include './models/Carrito/carrito.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/presentacion.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/carrito.css">
    <link rel="stylesheet" href="./public/css/productos.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/formulario.css">
    <script src="https://kit.fontawesome.com/ba1cd93264.js" crossorigin="anonymous"></script>
    <title>www.Building Technology.com</title>
</head>
<body>
    
    <section id="presentacion" class="presentacion-fondo">
        <div class="item-fondo"><img src="./public/img/Recurso 6.png" alt="Error 404"></div>
    </section>

    <section class="sec-anuncio">
        <div class="banner-anuncio">
            <p>Tu anuncio se mostrara aqui <b>descuentos en tu pagina web</b></span></p>
        </div>
    </section>

    <section class="seccion-header">
        <div class="sec-header">
            <div id="btn-menu" class="header-items">
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>
                <div class="btn-item-menu"></div>                
            </div>
            <div class="header-items titulo-inicio">Building Technology</div>
            <div class="header-items">
                <form class="form-search navegacion-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                <button type="submit" class="btn-buscar" name="submits"><img src="./public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
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
                    <form class="form-search barra-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <input type="text" id="barra-buscar" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                        <button type="submit" class="btn-buscar" name="submits"><img src="./public/img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                    </form>
                    <div class="menu-categorias">
                        <button class="btn-categoria"><a href="./controller/productos.php" title="Visitar Productos">Productos</a></button>
                        <button class="btn-categoria"><a href="" title="">Promociones</a></button>             
                        <button class="btn-categoria"><a href="" title="">Lo mas vendido</a></button>             
                        <button class="btn-categoria"><a href="" title="">Marcas</a></button>             
                        <button class="btn-categoria"><a href="#formularioContacto" title="Nuestro Formulario">Contacto</a></button>             
                    </div>
                </div>
                <div class="navegacion-usuario">
                    <button class="btn-panel"><a href="./controller/panelControl.php">PANEL DE CONTROL</a></button>
                    <button class="btn-configuracion"><a href="./controller/perfilUsuario.php">CONFIGURACION</a></button>
                    <button class="btn-cerrar-session"><a href="./controller/login.php">INICIAR SESSION</a></button>
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
                </div><!-- // * CONTENIDO DEL CARRITO -->
                <div class="item-carrito main-carrito">
                    <!--START Contenido del carrito -->

                    <!-- // ? CARRITO VACIO -->
                    <div class="carrito-vacio">
                        <div class="item-carrito-vacio img-carrito">
                            <img src="./public/img/carro-vacio.png" alt="Error al cargar la imagen" title="Carrito Vacio">
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
    
    <section class="sec-categorias">
        <div class="categorias">
            <div class="categorias-item"><a href="">Electronicos</a></div>
            <div class="categorias-item"><a href="">Muebles</a></div>
            <div class="categorias-item"><a href="">Audio</a></div>
            <div class="categorias-item"><a href="">Electrodomesticos</a></div>
            <div class="categorias-item"><a href="">Celulares</a></div>
            <div class="categorias-item"><a href="">Componentes</a></div>
            <div class="categorias-item"><a href="">Consolas</a></div>
            <div class="categorias-item"><a href="">Lo mas vendido</a></div>
            <div class="categorias-item"><a href="">Promocion</a></div>
            
        </div>
    </section>

    <section class="sec-carousel">
        <div class="content-banner">
            <img src="./public/img/banner-facebook-builtech.png" alt="Error 404" title="Promocion">
        </div>
    </section>

    <section class="sec-productos">
        <div class="content-categoria">
            <h3>Lo mas vendido</h3>
            <hr>
            <div class="dezplazamiento-categoria">
               <?php
               insertarHTML($productos);
               ?>
            </div>
        </div>
        <div class="content-categoria">
            <h3>En promocion</h3>
            <hr>
            <div class="dezplazamiento-categoria">
                <div class="card-producto">
                    <div class="producto-promocion" title="Producto en Descuento"><i class="fa-solid fa-tag" style="color: #ff0000;"></i>  % 25 de descuento </div>
                    <div class="producto-img"><a href="index.php?producto=11231"><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></a></div>
                    <div class="producto-info">
                        <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                        <div class="producto-codigo">002314</div>
                        <div class="producto-marca">Dove</div>
                        <div class="producto-montos">
                            <div class="monto-descuento">$ 1,200.00</div>
                            <div class="monto-producto">$ 999.00</div>
                        </div>
                        <button value="002314" class="btn-agregar-carrito"><i class="fa-solid fa-cart-shopping"></i>Añadir al carrito</button>
                    </div>
                </div>
                <div class="card-producto">
                    <div class="producto-promocion" title="Producto en Descuento"><i class="fa-solid fa-tag" style="color: #ff0000;"></i>  % 25 de descuento </div>
                    <div class="producto-img"><a href=""><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></a></div>
                    <div class="producto-info">
                        <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                        <div class="producto-codigo">002315</div>
                        <div class="producto-marca">Dove</div>
                        <div class="producto-montos">
                            <div class="monto-descuento">$ 1,200.00</div>
                            <div class="monto-producto">$ 999.00</div>
                        </div>
                        <button type="button" class="btn-agregar-carrito"><i class="fa-solid fa-cart-shopping"></i>Añadir al carrito</button>
                    </div>
                </div>
                <div class="card-producto">
                    <div class="producto-promocion" title="Producto en Descuento"><i class="fa-solid fa-tag" style="color: #ff0000;"></i>  % 25 de descuento </div>
                    <div class="producto-img"><a href=""><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></a></div>
                    <div class="producto-info">
                        <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                        <div class="producto-codigo">002316</div>
                        <div class="producto-marca">Dove</div>
                        <div class="producto-montos">
                            <div class="monto-descuento">$ 1,200.00</div>
                            <div class="monto-producto">$ 999.00</div>
                        </div>
                        <button type="button" class="btn-agregar-carrito"><i class="fa-solid fa-cart-shopping"></i>Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-categoria">
            <h3>Marcas</h3>
            <hr>
            <div class="dezplazamiento-categoria">
                <div class="card-producto">
                    <div class="producto-img"><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></div>
                    <div class="monto-producto">$ 1,200.00</div>
                    <div class="producto-marca">Dove</div>
                    <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                    <div class="producto-promocion">% 30 de descuento</div>
                    <div class="producto-con-descuento">Con descuento: $ 899.99</div>
                    <button type="button" class="btn-agregar-carrito"> <img src="./public/img/carrito-de-compras.png" alt="">Agregar al carrito</button>
                </div>
                <div class="card-producto">
                <div class="producto-img"><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></div>
                    <div class="monto-producto">$ 1,200.00</div>
                    <div class="producto-marca">Dove</div>
                    <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                    
                    <button type="button" class="btn-agregar-carrito"> <img src="./public/img/carrito-de-compras.png" alt="">Agregar al carrito</button>
                </div>
                <div class="card-producto">
                <div class="producto-img"><img src="./public/img/curology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></div>
                    <div class="monto-producto">$ 1,200.00</div>
                    <div class="producto-marca">Dove</div>
                    <div class="producto-nombre">Shampoo Anticaida con suero hidratante para fortalecer el cabello</div>
                    <div class="producto-promocion">% 30 de descuento</div>
                    <div class="producto-con-descuento">Con descuento: $ 899.99</div>
                    <button type="button" class="btn-agregar-carrito"> <img src="./public/img/carrito-de-compras.png" alt="">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-form-mail">
        <div class="content-form-mail">
            <div class="item-form-mail">
                <div class="text-info">
                <h3>Contactanos</h3>
                <p>Llena el formulario para contactarte por correo electronico y/o telefono.</p>
                </div>
            </div>
            <div class="item-form-mail content-form">
                <form id="formularioContacto" action="" method="post">
                    <input type="text" id="inputNombre" name="nombre" placeholder="Nombre Completo">
                    <input type="mail" id="inputMail" name="correo" placeholder="Correo electronio">
                    <input type="text" id="inputTelefono" name="telefono" placeholder="Ingresa tu numero de telefono">
                    <textarea name="mensaje" placeholder="Ingresa tu mensaje" id="textMensaje"></textarea>
                    <input name="submitContacto" id="submitContacto" type="submit" value="Enviar correo">
                </form>
            </div>
        </div>
    </section>

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
                <a href="./php/productos.php" title="">Productos</a>
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
    <div class="content-wha">
        <a href="https://api.whatsapp.com/send/?phone=3320525516&text=Hola%20Building%20Technology,%20%C2%BFMe%20puedes%20ayudar?&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><img src="./public/img/whatsapp.png" alt="Whastapp" title="Ingresar WhatsApp"></a>
    </div> 
    <!-- <div class="toast">
        <div class="toast-head">
            <i class="fa-solid fa-cart-shopping"></i>
            <div>Agregaste un producto al carrito</div>
        </div>
        <div class="toast-body"> Crea tu cuenta para obtener beneficios</div>
    </div> -->
    <div class="content-modal">
        <div class="modal">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <script src="./javascript/app.js"></script>
    <script src="./javascript/carrito.js"></script>
</body>
</html>