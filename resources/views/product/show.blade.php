@extends('layouts.layout')

@section('title', 'Contactanos | Market App')

@section('content')

    @livewire('product-select', ['product' => $product])

    <x-product-list :products='$productscategory'>
        <x-slot name="title">
            Productos Relacionados
        </x-slot>
    </x-product-list>

    @if ($productsbrand->count() > 5)
        <x-product-list :products='$productsbrand'>
            <x-slot name="title">
                Productos Relacionados por Marca
            </x-slot>
        </x-product-list>
    @endif

@endsection
