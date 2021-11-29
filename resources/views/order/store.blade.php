@extends('layouts.layout')

@section('title', 'Pago | Market App')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl my-4">
                <span class="block">Excelente {{$datapurchase -> names}}!!</span>
                <span class="block text-indigo-600">Compra realizada con exito.</span>
            </h2>
            <h5>
                Nos comunicaremos con usted de acuerdo al pedido realizado.
            </h5>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                       Ver mi producto
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                      Seguir comprando
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
