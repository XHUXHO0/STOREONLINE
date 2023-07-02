<div class="flex justify-center items-center">
    <a href="{{ route('clientes.show',['cliente'=>$id]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-eye"></i> Ver
    </a>
    &nbsp;
    <a href="{{ route('clientes.edit',['cliente'=>$id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-sharp fa-solid fa-pen-to-square"></i> Editar
    </a>
    &nbsp;
    <form action="{{ route('clientes.destroy',['cliente'=>$id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-trash"></i> Eliminar
        </button>
    </form>
</div>