<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <h1>Categorias</h1>
    </div>
    <div class="w-3/4 mx-auto my-6">
        <a  href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear nueva
        </a>
    </div>
    <div class="w-3/4 mx-auto my-6">
        @livewire('tablas.categorias-datatable')
    </div>
</x-app-layout>