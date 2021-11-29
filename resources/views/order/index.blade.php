@extends('layouts.layout')

@section('title', 'Pago | Market App')

@section('content')
    <div>
        @if ($customer)
            <section class="section-pagetop bg-white">
                <div class="container">

                    <header class="section-heading">
                        <h2 class="section-title text-warning">Verificacion de compra</h2>
                    </header><!-- sect-heading -->

                    <p>Si desea editar su informacion personal, puede acceder a "Ajustes de compra" desde su perfil ubicado
                        en la barra
                        de
                        navegacion o hacer click en el boton de abajo.</p>
                    <a href="{{ route('client.profile') }}" class="btn btn-dark">Revisar datos</a>

                </div>
            </section>
            <div class="bg-warning">

                <div class="max-w-7xl mx-auto pt-4 pb-2 sm:px-6 lg:px-5">
                    <div class="mt-10 sm:mt-0">
                        <div>
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="px-4 py-4 sm:px-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Informacion personal
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        Personal details and application.
                                    </p>
                                </div>
                                <div class="border-t border-gray-200">
                                    <dl>
                                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Datos de usuario
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <ul role="list"
                                                    class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm bg-gray-100">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Nombres y Apellidos
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->names . ', ' . $customer->lastnames }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Documento Nacional de Indentidad
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->dni }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm bg-gray-100">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Numero de celular
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->phone }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </div>
                                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Datos de envio
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <ul role="list"
                                                    class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm bg-gray-100">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Distrito
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->district }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Direccion de envio
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->default_shipping_address }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm bg-gray-100">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <span class="ml-2 flex-1 w-0 truncate text-gray-600">
                                                                Detalles de direccion de envio
                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                {{ $customer->billing_address }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="max-w-7xl mx-auto pt-2 pb-4 sm:px-6 lg:px-5">
                        <div class="mt-10 sm:mt-0">
                            <form action="{{ route('client.order.delivery') }}" method="post">
                                @csrf
                                <div>
                                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                        <div class="px-4 pt-4 bg-white space-y-6 sm:p-6">
                                            <fieldset>
                                                <legend class="text-base font-medium text-gray-900">Metodo de pago</legend>
                                                <p class="text-sm text-gray-500">Para realizar la compra de su carrito tiene
                                                    que
                                                    seleccionar
                                                    un metodo pago que cuenta la tienda.
                                                </p>
                                                <div class="mt-3 space-y-4">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <select id="paymentmethod" name="paymentmethod"
                                                            autocomplete="paymentmethod"
                                                            class="mt-1 block w-60 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="" selected>Seleccione pago</option>
                                                            @foreach ($payment as $item)
                                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                                            {{-- <option value="mercadopago">Mercado Pago</option> --}}
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <x-jet-input-error for="paymentmethod" class="my-3" />
                                            </fieldset>

                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-900">Delivery</legend>
                                                    <p class="text-sm text-gray-500">Puede marcar la siguiente opcion si
                                                        desea
                                                        recibir sus
                                                        productos
                                                        en su vivienda, cabe resaltar que se agregara un cargo adicional a
                                                        su
                                                        total de
                                                        productos.
                                                    </p>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="delivery" name="delivery" type="checkbox"
                                                                value="confirm"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        </div>
                                                        <div class="ml-3 text-sm">
                                                            <label for="delivery" class="font-medium text-gray-700">Enviar a
                                                                domicilio</label>
                                                            <p class="text-gray-500">Se aumentara un precio adicional no
                                                                mayor
                                                                a s/ 10
                                                                dependiento la direccion registrada.</p>
                                                        </div>
                                                    </div>

                                                    <x-jet-input-error for="delivery" />

                                            </fieldset>

                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Confirmar datos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <section class="section-pagetop bg-white">
                <div class="container">

                    <header class="section-heading">
                        <h2 class="section-title text-warning">No ha registrado datos de compra!</h2>
                    </header><!-- sect-heading -->

                    <p>Al parecer no ha registrado sus datos para procesar una compra en la tienda, puede acceder a la
                        configuracion desde la opcion "Ajustes de compra" dando click en su perfil o en el boton de abajo.
                    </p>
                    <a href="{{ route('client.profile') }}" class="btn btn-primary">Refistrar datos</a>

                </div>
            </section>
        @endif
    </div>
@endsection
