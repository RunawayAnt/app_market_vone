@extends('layouts.layout')

@section('title', 'Market App')

@section('content')
    <section class="section-name bg padding-y">
        <div class="container">
            <header class="section-heading text-center">
                <div class="icontext mb-3">
                    <img class="icon icon-lg rounded-circle" src="{{ $shop->logo }}">
                </div>
                <h2 class="section-title">{{ $shop->shopname }}</h2>
                <p class="lead">{{ $shop->description }}</p>
                @if ($shop->linkssocial)
                    <a href="{{$shop->linkssocial}}" target="_blank" class="btn btn-success "><i class="fab fa-whatsapp fa-1x"></i> Whatsapp Empresas</a>
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
                                    <a href="{{ route('product',$item->slug) }}" class="title">{{ $item->name }}</a>
                                    <a href="{{ route('product',$item->slug) }}" class="btn btn-outline-warning btn-sm"> Ver producto &nbsp;
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
                <aside class="col-md-3">

                </aside> <!-- col.// -->
                <main class="col-md-9">
                    <x-filter-products :products='$products' :count='$count'></x-filter-products>
                </main> <!-- col.// -->
            </div>
        </div> <!-- container .//  -->
    </section>
@endsection
