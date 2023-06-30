<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <div class="bg-white p-10">
            <form action="{{ route('productos.update',$producto->id) }}" method="post">
                @csrf
                @method('put')
                @include('Productos.partials.form')
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                href="{{ route('productos.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</x-app-layout>