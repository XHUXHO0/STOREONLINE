<div class="flex justify-center items-center">
    <a href="{{ route('categorias.show',['categoria'=>$id]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
        Ver
    </a>
    &nbsp;
    <a href="{{ route('categorias.edit',['categoria'=>$id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Editar
    </a>
    &nbsp;
    <form action="{{ route('categorias.destroy',['categoria'=>$id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Eliminar
        </button>
    </form>
</div>