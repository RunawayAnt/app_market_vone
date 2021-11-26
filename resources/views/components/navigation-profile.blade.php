<div class="widgets-wrap float-md-right">

    {{-- cart shop --}}
    @auth
        @can('client.home')
            @livewire('cart-total')
        @endcan
    @else
        @livewire('cart-total')

    @endauth


    <div class="widget-header dropdown">
        @if (Route::has('login'))
            <div class="widget-header icontext ">
                <a class="icon icon-sm rounded-circle border bg-white"><i class="fa fa-user text-warning"></i></a>
                <div class="text">
                    @auth
                        <a href="#" data-toggle="dropdown" data-offset="20,10">
                            <div class="icontext">

                                <div class="text text-white">
                                    <div> {{ Auth::user()->name }} <i class="fa fa-caret-down text-white"></i> </div>
                                </div>

                                <div class="dropdown-menu dropdown-menu-right mt-2">
                                    @can('admin.home')
                                        {{-- <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a> --}}
                                        <x-jet-dropdown-link href="{{ url('/dashboard') }}">
                                            {{ __('Dashboard') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Mi perfil') }}
                                    </x-jet-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Cerrar Sesion') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </div> <!--  dropdown-menu .// -->
                            </div>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-white">Iniciar Sesion |</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white">Registrarse</a>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div> <!-- widget-header .// -->
</div> <!-- widgets-wrap.// -->
