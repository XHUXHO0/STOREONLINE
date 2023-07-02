<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <h1>Crear Gastos</h1>
    </div>
    <div class="w-3/4 mx-auto my-6">
        <div class="p-10 bg-white">
            <form action="{{ route('gastos.store') }}" method="post">
                @csrf
                @include('Gastos.partials.form')
                <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    Guardar
                </button>
                <a class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700" 
                href="{{ route('gastos.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</x-app-layout>