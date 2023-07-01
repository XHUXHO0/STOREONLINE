<div class="flex justify-center items-center">
    <a href="{{ route('productos.codigobarras',['producto'=>$id]) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-sharp fa-solid fa-barcode"></i> Genera Codigo
    </a>
    &nbsp;
    <a href="{{ route('productos.show',['producto'=>$id]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-eye"></i> Ver
    </a>
    &nbsp;
    <a href="{{ route('productos.edit',['producto'=>$id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-sharp fa-solid fa-pen-to-square"></i> Editar
    </a>
    &nbsp;
    <form action="{{ route('productos.destroy',['producto'=>$id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-trash"></i> Eliminar
        </button>
    </form>
</div>