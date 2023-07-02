<aside class="hidden lg:flex flex-col   w-64 h-full px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    
    <a href="{{ route('profile.show') }}">
        <div class="flex justify-center items-center -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="avatar">
        </div>
        <div class="flex justify-center w-full my-2 p-2 border-2 border-blue-500 rounded-xl">
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">{{ Auth::user()->email }}</p>
        </div>
    </a>

    <div class="flex-1 px-4 mt-2 space-y-2 overflow-hidden hover:overflow-auto">
        <x-responsive-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-cart-shopping"></i>
            </span>
            &nbsp;{{ __('Carrito') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-gauge"></i>
            </span>
            &nbsp;{{ __('Dashboard') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('empresas.index') }}" :active="request()->routeIs('empresas.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-building"></i>
            </span>
            &nbsp;{{ __('Empresas') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('sucursales.index') }}" :active="request()->routeIs('sucursales.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-house-flag"></i>
            </span>
            &nbsp;{{ __('Sucursales') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('ventas.index') }}" :active="request()->routeIs('ventas.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-money-bills"></i>
            </span>
            &nbsp;{{ __('Ventas') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('categorias.index') }}" :active="request()->routeIs('categorias.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-book-open"></i>
            </span>
            &nbsp;{{ __('Categorias') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('estados.index') }}" :active="request()->routeIs('estados.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-regular fa-circle-question"></i>
            </span>
            &nbsp;{{ __('Estados') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('productos.index') }}" :active="request()->routeIs('productos.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-list-check"></i>
            </span>
            &nbsp;{{ __('Productos') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('clientes.index') }}" :active="request()->routeIs('clientes.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-id-card-clip"></i>
            </span>
            &nbsp;{{ __('Clientes') }}
        </x-responsive-sidebar-link>
        <x-responsive-sidebar-link href="{{ route('gastos.index') }}" :active="request()->routeIs('gastos.index')">
            <span class="p-2 bg-opacity-50 dark:fron-blue-500 to-blue-50 bg-blue-200 dark:w-3 dark:h-8 rounded-l-lg focus:bg-black">
                <i class="fa-solid fa-money-bill-1-wave"></i>
            </span>
            &nbsp;{{ __('Gastos') }}
        </x-responsive-sidebar-link>
        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-responsive-nav-link href="{{ route('logout') }}"
                    @click.prevent="$root.submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;{{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</aside>
