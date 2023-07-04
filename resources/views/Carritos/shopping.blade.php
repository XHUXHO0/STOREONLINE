<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    <script src="{{ asset('js/carritoTailwin.js') }}" async></script>
    
    <button onclick="miFunc()">Consola</button>
    
    <section class="flex justify-center flex-wrap ">
       
        <!-- Contenedor de elementos -->
        <div class="w-1/3" id="contenedor-items">
            @foreach ($productos as $producto )     
                <div class="item">
                    <span class="id-item">{{ $producto->id ?? "--"}}</span>
                    <span class="titulo-item">{{ $producto->marca ?? "--"}}--{{ $producto->titulo ?? "--"}}</span>
                    <img src="{{ $producto->uri_foto ?? ''}}" alt="" class="img-item ">
                    <span class="precio-item">{{ $producto->precio+$producto->ganancia}}</span>
                    <span class="codigo-item flex justify-center">{{ $producto->codigo}}</span>
    
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
            @endforeach
        </div>
         <!-- Carrito de Compras -->
         <div class="carrito" id="carrito">
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