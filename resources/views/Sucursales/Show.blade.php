<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <div class="bg-white p-10">
           
            @include('Categorias.partials.form')
            <a href="{{ route('categorias.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Categorias
            </a>
        </div>
    </div>
</x-app-layout>