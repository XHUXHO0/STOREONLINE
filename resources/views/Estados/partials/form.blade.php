
<div>
    <div class="mb-6">
      <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
      <input type="text" value="{{ $estado->nombre ?? '' }}" id="nombre"  name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre" required>
    </div>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
      <input type="text" value="{{ $estado->descripcion ?? '' }}" id="descripcion" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripcion" required>
    </div>
</div>