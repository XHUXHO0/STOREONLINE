<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ventas') }}
        </h2>
    </x-slot>
    <div class="w-3/4 mx-auto my-6">
        @livewire('tablas.ventas-datatable')
    </div>
</x-app-layout>