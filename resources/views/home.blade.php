@extends('layouts.layout')

@section('title', 'Market App')

@section('content')

    <x-banner-presentation></x-banner-presentation>

    <x-features-presentation></x-features-presentation>

    <x-banners-list />

    @livewire('products-section')

    <x-banners-list />

    <x-brands-list>
        <x-slot name="title">
            Nuestras tiendas utilizan..
        </x-slot>
    </x-brands-list>

@endsection
