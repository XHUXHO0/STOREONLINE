<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block w-auto h-9" />
                    </a>
                </div>
                <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 uppercase">{{ Auth::user()->empresa->title }}</h4>
            </div>
            <div class="flex items-center">
                <!-- Dropdown toggle button -->
                
                
                <div x-data="{ isOpen: false }" class="relative inline-block">
                    <!-- Carrito -->
                    <button @click="isOpen = !isOpen" class="relative z-10 block p-2 text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
                        <i class="fa-solid fa-cart-shopping"></i>&nbsp;({{ Auth::user()->carrito() }})
                    </button> 
                    <!-- Dropdown menu -->
                    <div x-show="isOpen" 
                        @click.away="isOpen = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" 
                        class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800"
                    >
                    @foreach (Auth::user()->carritoItems() as $carrito)
                    <a href=""></a>    
                        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize 
                        transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100
                         dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-cart-shopping"></i>
                          Sign Out {{ $carrito->items }}
                        </a>
                    @endforeach
                    </div>
                </div>






















                {{-- <div class="max-w-lg mx-auto">
                    <button  class="bg-transparent hover:bg-blue-500 
                    text-blue-700 font-semibold hover:text-white py-2 
                    px-4 border border-blue-500 hover:border-transparent
                     rounded h-10 w-auto flex justify-center items-center" 
                    type="button"
                    data-dropdown-toggle="carrito"> 
                        
                    </button>
                    <!-- Carrito menu -->
                    <div class="flex z-50" id="carrito">
                        <div class="flex justify-center flex-col items-center">
                           
                        </div>
                    </div>
                </div> --}}
                <!-- Nombre -->
                <div class="hidden md:flex items-center shrink-0">
                    <a href="{{ route('profile.show') }}">
                        <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 uppercase">{{ Auth::user()->nombre }}&nbsp;{{ Auth::user()->apellido_paterno }}&nbsp;{{ Auth::user()->apellido_materno }}</h4>
                    </a>
                </div>

               
                

               























                
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('carritos.index') }}" :active="request()->routeIs('carritos.index')">
                <i class="fa-solid fa-cart-shopping"></i>&nbsp;{{ __('Carrito') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="fa-solid fa-gauge"></i>&nbsp;{{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('empresas.index') }}" :active="request()->routeIs('empresas.index')">
                <i class="fa-solid fa-building"></i>&nbsp;{{ __('Empresas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('sucursales.index') }}" :active="request()->routeIs('sucursales.index')">
                <i class="fa-solid fa-house-flag"></i>&nbsp;{{ __('Sucursales') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('ventas.index') }}" :active="request()->routeIs('ventas.index')">
                <i class="fa-solid fa-money-bills"></i>&nbsp;{{ __('Ventas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('categorias.index') }}" :active="request()->routeIs('categorias.index')">
                <i class="fa-solid fa-book-open"></i>&nbsp;{{ __('Categorias') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('estados.index') }}" :active="request()->routeIs('estados.index')">
                <i class="fa-regular fa-circle-question"></i>&nbsp;{{ __('Estados') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('productos.index') }}" :active="request()->routeIs('productos.index')">
                <i class="fa-solid fa-list-check"></i>&nbsp;{{ __('Productos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('clientes.index') }}" :active="request()->routeIs('clientes.index')">
                <i class="fa-solid fa-id-card-clip"></i>&nbsp;{{ __('Clientes') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('gastos.index') }}" :active="request()->routeIs('gastos.index')">
                <i class="fa-solid fa-money-bill-1-wave"></i>&nbsp;{{ __('Gastos') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="mr-3 shrink-0">
                        <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nombre }}" />
                    </div>
                @endif

                <div>
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->nombre }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
