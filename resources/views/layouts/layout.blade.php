<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Bootstrap-ecomerce-->
    @include('layouts.bootstrap_ecomerce')

    <!-- Scripts-->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles
</head>

<body>

    <x-navigation />

    @yield('content')

    <x-footer />

    @stack('modals')

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
                title: 'Producto "' + message + '" añadido al carrito.'
            })
        });

        Livewire.on('saveDataUser', function(message) {
            Swal.fire(
                message.title,
                'Gracias por registrar sus datos, ahora puede comenzar a comprar',
                'success'
            )
        });
    </script>
</body>

</html>
