<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
<script src="{{ asset('js/carrito.js') }}" async></script>

<header>
    <h1>Tienda de Relojes</h1>
</header>
<section class="contenedor">
    <!-- Contenedor de elementos -->
    <div class="contenedor-items">
        <div class="item">
            <span class="titulo-item">Box Engasse</span>
            <img src="img/boxengasse.png" alt="" class="img-item">
            <span class="precio-item">$15.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">English Horse</span>
            <img src="img/englishrose.png" alt="" class="img-item">
            <span class="precio-item">$25.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Knock Nap</span>
            <img src="img/knocknap.png" alt="" class="img-item">
            <span class="precio-item">$35.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">La Night</span>
            <img src="img/lanight.png" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Silver All</span>
            <img src="img/silverall.png" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Skin Glam</span>
            <img src="img/skinglam.png" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Midimix</span>
            <img src="img/midimix.png" alt="" class="img-item">
            <span class="precio-item">$54.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Sir Blue</span>
            <img src="img/sirblue.png" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Middlesteel</span>
            <img src="img/middlesteel.png" alt="" class="img-item">
            <span class="precio-item">$42.800</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
    </div>
    <!-- Carrito de Compras -->
    <div class="carrito" id="carrito">
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items">
            <!-- 
            <div class="carrito-item">
                <img src="img/boxengasse.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Box Engasse</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$15.000,00</span>
                </div>
               <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </span>
            </div>
            <div class="carrito-item">
                <img src="img/skinglam.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Skin Glam</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="3" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$18.000,00</span>
                </div>
               <button class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </button>
            </div>
             -->
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">
                    $120.000,00
                </span>
            </div>
            <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
        </div>
    </div>
</section>

</x-app-layout>