@extends('layouts.layout')

@section('title', 'Market App')

@section('content')

    @include('layouts.bannershome')

    <x-banners-list />

    @livewire('products-section')

    <x-banners-list />

    <x-brands-list>
        <x-slot name="title">
            Nuestras tiendas utilizan..
        </x-slot>
    </x-brands-list>

@endsection
