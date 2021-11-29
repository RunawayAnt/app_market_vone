<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('bootstrap-ecomerce/images/logo/logo.png') }}" type="image/x-icon">
        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
        <!-- Bootstrap-ecomerce-->
        @include('layouts.bootstrap_ecomerce')
    
        <!-- Scripts-->
        <script src="{{ mix('js/app.js') }}" defer></script>
    
        @livewireStyles
    </head>
    <body class="bg-warning">
             {{ $slot }}
     </body>
</html>
