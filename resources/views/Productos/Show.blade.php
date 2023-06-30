<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <div class="bg-white p-10">
            @include('Productos.partials.form')
            <a href="{{ route('productos.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Productos
            </a>
        </div>
    </div>
</x-app-layout>