<div class="widgets-wrap float-md-right">

    {{-- cart shop --}}
    
            @livewire('cart-total')
         

    <div class="widget-header dropdown">
        @if (Route::has('login'))
            <div class="widget-header icontext">
                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                <div class="text">
                    @auth
                        <a href="#" data-toggle="dropdown" data-offset="20,10">
                            <div class="icontext">

                                <div class="text">
                                     <div>My account <i class="fa fa-caret-down"></i> </div>
                                </div>

                                <div class="dropdown-menu dropdown-menu-right">
                                    @can('admin.home')
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                                    @endcan

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </div> <!--  dropdown-menu .// -->
                            </div>
                        </a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a> |
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div> <!-- widget-header .// -->
</div> <!-- widgets-wrap.// -->
