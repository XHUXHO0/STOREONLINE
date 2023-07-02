<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <h1>Productos</h1>
    </div>
    <div class="w-3/4 mx-auto my-6">
        <a  href="{{ route('productos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear nuevo
        </a>
    </div>
    <div class="w-3/4 mx-auto my-6">
        @livewire('tablas.productos-datatable')
    </div>
</x-app-layout>