<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <h1>Empresas</h1>
    </div>
    <div class="w-3/4 mx-auto my-6">
        <a  href="{{ route('empresas.create') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Crear nueva
        </a>
    </div>
    <div class="w-3/4 mx-auto my-6">
        @livewire('tablas.empresas-datatable')
    </div>
</x-app-layout>