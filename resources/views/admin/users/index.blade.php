@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1 class="mb-3">Configuracion de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.user-index')
@stop

@section('css')
    {{-- @livewireStyles --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log('Hi!');
        Livewire.on('alertusers', function(message) {
            Swal.fire(
                'Registro exitoso!',
                'Usuario registrado satisfactoriamente',
                'success'
            )
        });
    </script>
    {{-- @livewireScripts --}}
@stop
