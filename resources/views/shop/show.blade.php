@extends('layouts.layout')

@section('title', 'Market App')

@section('content')
    <section class="section-name bg padding-y">
        <div class="container">
            <header class="section-heading text-center">
                <div class="icontext mb-3">
                    <img class="icon icon-lg rounded-circle" src="{{ $shop->logo }}">
                </div>
                <div class="rating-wrap my-3">
                    <x-product-rating :qualification="$qualification"></x-product-rating>
                    <small class="label-rating text-success"> <i class="fa fa-box"></i> {{$count}} Productos disponibles
                    </small>
                </div> <!-- rating-wrap.// -->
                <h2 class="section-title">{{ $shop->shopname }}</h2>
                <p class="lead">{{ $shop->description }}</p>
                @if ($shop->linkssocial)
                    <a href="{{ $shop->linkssocial }}" target="_blank" class="btn btn-success "><i
                            class="fab fa-whatsapp fa-1x"></i> Whatsapp Empresas</a>
                @endif
            </header><!-- sect-heading -->
        </div><!-- container // -->
    </section>
    <section class="section-name bg padding-y">
        <div class="container">
            <header class="section-heading">
                <h5 class="section-title">Recien agregados</h5>
            </header>
            <div class="card card-body m-3 shadow-sm ">
                <div class="row">
                    @foreach ($productsrecent as $item)
                        <div class="col-md-3">
                            <figure class="itemside mb-4">
                                <div class="aside"><img src="{{ $item->image }}" class="img-sm rounded-lg"></div>
                                <figcaption class="info align-self-center">
                                    <a href="{{ route('product', $item->slug) }}"
                                        class="title">{{ $item->name }}</a>
                                    <a href="{{ route('product', $item->slug) }}" class="btn btn-outline-warning btn-sm">
                                        Ver producto &nbsp;
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div> <!-- row.// -->
            </div>
        </div>
    </section>
    <section class="section-content padding-y">
        <div class="container">
            <div class="row">
                <aside class="col-md-4">
                    <!-- ============================ COMPONENT 1 ================================= -->
                    <div class="list-group">
                        <article class="list-group-item bg-white">
                            <header class="filter-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                    class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title text-gray">Rese&ntilde;as de la tienda</h6>
                                </a>
                            </header>
                            <div>
                                {{-- <div class="filter-content collapse overflow-auto" id="collapse2" style=""> --}}
                                <div class="filter-content collapse show" id="collapse1" style="">
                                    <div class="row">
                                        {{-- form comentario --}}
                                        <div class="col-12">
                                            @auth
                                                @can('client.home')
                                                    @livewire('comments-shops-create',['shop' => $shop])
                                                @endcan
                                            @else

                                                <div class="bg-warning p-3 rounded">
                                                    <div class="row">
                                                        <div class="col text-white">
                                                            ¿Aun no te has afiliado?. Solo debes
                                                            <a href="{{ route('login') }}" class="text-primary">Iniciar
                                                                Sesion </a> &oacute;
                                                            @if (Route::has('register'))
                                                                <a href="{{ route('register') }}"
                                                                    class="text-primary">Registrarse</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endauth
                                        </div>
                                        {{-- lista-comentarios --}}
                                        <div class="col-12">
                                            @livewire('comments-shops-list',['shop' => $shop])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div> <!-- list-group.// -->
                    <!-- ============================ COMPONENT 1 END .// ================================= -->

                </aside> <!-- col.// -->
                <main class="col-md-8">
                    <x-filter-products :products='$products' :count='$count'></x-filter-products>
                </main> <!-- col.// -->
            </div>
        </div> <!-- container .//  -->
    </section>
@endsection
