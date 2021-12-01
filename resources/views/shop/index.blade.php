@extends('layouts.layout')

@section('title', 'Market App')

@section('content')

    <x-banner-presentation></x-banner-presentation>

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-primary">
        <div class="container">
            <h2 class="title-page text-white"><i class="fas fa-store-alt white"></i> Nuestras tiendas</h2>
        </div> <!-- container //  -->
    </section>

    <!-- ========================= SECTION INTRO END// ========================= -->
    <section class="section-content padding-y bg">
        <div class="container">

            <!-- ============================ COMPONENT 1 ================================= -->
            <div class="row">
                @foreach ($shops as $shop)
                    <div class="col-3 mb-5">
                        <article class="card card-body p-3">
                            <figure class="text-center">
                                <span class=" icon-md"><img src="{{ $shop->logo }}" alt="logo-shop"
                                        class="rounded-circle"></span>
                                <figcaption class="pt-4">
                                    <h5 class="title">{{ $shop->shopname }}</h5>
                                    <p>{{ $shop->description }}</p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                            <a class="btn btn-warning mt-4" href="{{ route('shop', $shop->slug) }}"> Visitar tienda</a>
                        </article> <!-- panel-lg.// -->
                    </div><!-- col // -->
                @endforeach
            </div>

        </div> <!-- container .//  -->
    </section>

@endsection
