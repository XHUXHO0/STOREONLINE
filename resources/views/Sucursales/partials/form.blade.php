
<div>
    <div class="mb-6">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
      <input type="text" value="{{ $sucursal->title ?? '' }}" id="title"  name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title" required>
    </div>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
      <input type="text" value="{{ $sucursal->direccion ?? '' }}" id="direccion" name="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="direccion" required>
    </div>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripccion</label>
      <input type="text" value="{{ $sucursal->descripccion ?? '' }}" id="descripccion" name="descripccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="descripccion" required>
    </div>
</div>