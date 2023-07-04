<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
<script src="{{ asset('js/carritoTailwin.js') }}" async></script>

<button onclick="miFunc()">Consola</button>

<section class="flex justify-center flex-wrap ">
   
    <!-- Contenedor de elementos -->
    <div class="" id="contenedor-items">
        @foreach ($productos as $producto )   
        <div id="item">
                
            <span id="id-item" >{{ $producto->id ?? "--"}}</span>
            <span id="titulo-item">{{ $producto->marca ?? "--"}}--{{ $producto->titulo ?? "--"}}</span>
            <img src="{{ $producto->uri_foto ?? ''}}" alt="" id="img-item">
            <span id="precio-item">{{ $producto->precio+$producto->ganancia}}</span>
            <span id="codigo-item">{{ $producto->codigo}}</span>

            <button class="boton-item">Agregar al Carrito</button>
        </div>
        @endforeach
    </div>
     <!-- Carrito de Compras -->
     <div class="" id="carrito">
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items">
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