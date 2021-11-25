<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @section('plugins.Select2', true)
    {{-- <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Bootstrap-ecomerce-->
    @include('layouts.links')

    @livewireStyles
</head>

<body>

    <x-navigation />

    @yield('content')

    <x-footer />

    @livewireScripts

    <script>
        Livewire.on('alert', function(message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-start',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Producto "'+message+'" añadido al carrito.'
            })
         });
    </script>
</body>

</html>
