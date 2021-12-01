@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- {-- Minimal with title, text and icon --}}
    <x-adminlte-info-box title="Usuarios Vendedores" text="3 usuarios vendedores registrados" icon="far fa-lg fa-star" />
    {{-- {-- Minimal with title, text and icon --}} 
    <x-adminlte-info-box title="Metodos de pago" text="1 metodo de pago agregado" icon="far fa-lg fa-star" />
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
