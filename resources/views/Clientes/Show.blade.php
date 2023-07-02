<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <h1>Ver Clientes</h1>
    </div>
    <div class="w-3/4 mx-auto my-6">
        <div class="bg-white p-10">
           
            @include('Clientes.partials.form')
            <a href="{{ route('clientes.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Clientes
            </a>
        </div>
    </div>
</x-app-layout>