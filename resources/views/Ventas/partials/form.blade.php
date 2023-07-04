
<div>
    <div class="relative z-0 w-full mb-6 group">
      <label for="id_usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vendedor</label>
      <select id="id_usuario" name="id_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        @foreach ($vendedores as $vendedor)
          <option value="{{ $vendedor->id }}" {{ isset($producto) && $producto->id_usuario == $vendedor->id ? "selected" : "" }}>{{ $vendedor->nombre }}&nbsp;{{ $vendedor->descripcion }}</option> 
        @endforeach  
      </select>
    </div>
    <div class="mb-6">
      <label for="monto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Monto</label>
      <input type="text" value="{{ $venta->monto ?? '' }}" id="monto"  name="monto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="monto" required>
    </div>
     <div class="mb-6">
      <label for="ganancia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganancia</label>
      <input type="text" value="{{ $venta->ganancia ?? '' }}" id="ganancia"  name="ganancia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ganancia" required>
    </div>
    <div class="mb-6">
      <label for="items" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Items</label>
      <input type="text" value="{{ $venta->items ?? '' }}" id="items" name="items" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="items" required>
    </div>
    <div class="relative z-0 w-full mb-6 group">
      <label for="id_estatus_venta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vendedor</label>
      <select id="id_estatus_venta" name="id_estatus_venta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        @foreach ($estatus_ventas as $estatus_venta)
          <option value="{{ $estatus_venta->id }}" {{ isset($venta) && $venta->id_estatus_venta == $estatus_venta->id ? "selected" : "" }}>{{ $estatus_venta->nombre }}&nbsp;{{ $estatus_venta->descripcion }}</option> 
        @endforeach  
      </select>
    </div>
    <div class="mb-6">
      <label for="codigo_referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Referencia</label>
      <input type="text" value="{{ $venta->codigo_referencia ?? '' }}" id="codigo_referencia" name="codigo_referencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="codigo referencia" required>
    </div>
</div>