@extends('layouts.layout')

@section('title', 'Market App')

@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">{{$title}}</h2>
            <h5 class="">Categorias y marcas de productos</h5>
            <nav>
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Best category</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                </ol>
            </nav>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">
            @livewire('category-list')
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
