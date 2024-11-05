<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tienda en linea</title>
</head>
<body>
    
    <section class="sec-anuncio">
        <div class="banner-anuncio">
            <p>Tu anuncio se mostrara aqui <b>descuentos en tu pagina web</b></span></p>
        </div>
    </section>

    <section class="seccion-header">
        <div class="sec-header">
            <div class="header-items btn-img"><img src="./img/barra-de-navegacion.png" alt="Error 404" title="Navegacion"></div>
            <div class="header-items titulo-inicio">Building Technology</div>
            <div class="header-items">
                <form class="form-search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="barra-busqueda" name="buscar" placeholder="Buscar componentes">    
                <button type="submit" class="btn-buscar" name="submits"><img src="./img/simbolo-de-la-interfaz-de-busqueda.png" alt="Error 404" title="Buscar"></button>
                </form>
            </div>
            <div class="header-items btn-img"><img src="./img/carrito-de-compras.png" alt="Error 404" title="Carrito de compras"></div>
        </div>
        <div class="contenedor-barra-navegacion"></div>
    </section>

    <section class="sec-categorias">
        <div class="categorias">
            <div class="categorias-item"><a href="">Categoria 1</a></div>
            <div class="categorias-item"><a href="">Categoria 2</a></div>
            <div class="categorias-item"><a href="">Categoria 3</a></div>
            <div class="categorias-item"><a href="">Categoria 4</a></div>
            <div class="categorias-item"><a href="">Categoria 5</a></div>
            <div class="categorias-item"><a href="">Categoria 6</a></div>
            
        </div>
    </section>

    <section class="sec-content-cards">
        <div class="contenedor-anuncios">
            <div class="item-anuncios"><a href=""><img src="./img/anuncio-card-1.jpg" alt="Error 404" title=""></a></div>
            <div class="item-anuncios"><a href=""><img src="./img/anuncio-card-1.jpg" alt="Error 404" title=""></a></div>
            <div class="item-anuncios"><a href=""><img src="./img/anuncio-card-1.jpg" alt="Error 404" title=""></a></div>
        </div>
    </section>

    <section class="sec-productos">
        <div class="content-categoria">
            <h3>Lo mas vendido</h3>
            <div class="dezplazamiento-categoria">
                <div class="card-producto">
                    <div class="producto-img"><img src="./img/urology-sR1oAhAT_Uw-unsplash.jpg" alt="Error 404" title="Nombre del producto"></div>
                    <div class="producto-nombre">Tu Producto</div>
                    <div class="producto-promocion">%30 de descuento</div>
                    <div class="monto-producto">$ 1,2000.00</div>
                    <button type="button" class="btn-agregar-carrito"> <img src="./img/carrito-de-compras.png" alt=""> Agregar al carrito</button>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>

</body>
</html>