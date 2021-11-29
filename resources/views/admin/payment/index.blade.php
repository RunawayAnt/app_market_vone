@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1 class="mb-3">Metodos de Pago</h1>
@stop

@section('content')
    @livewire('admin.payment-list')
@stop

@section('css')
    {{-- @livewireStyles --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log('Hi!');
        Livewire.on('alertpayment', function(message) {
            Swal.fire(
                'Registro exitoso!',
                'Metodo de pago registrado correctamente',
                'success'
            )
        });
    </script>
    {{-- @livewireScripts --}}
@stop
