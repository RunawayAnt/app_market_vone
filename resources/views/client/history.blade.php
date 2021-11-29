@extends('layouts.layout')

@section('title', 'Historial compras | Market App')

@section('content')
    <div class="bg pb-5 pt-5">
        <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Costo Pagado
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Registrado con
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Estado
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Metodo de pago
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Delivery
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Realizado
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($profile as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">s/ {{ $item->order_ammount }}. 00
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ $item->order_email }}</div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        @if ($item->order_status == "in_process")
                                                        <span class="btn btn-primary btn-sm">En revision</span>
                                                        @endif

                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ $item->type_payment }}</div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900"> 
                                                        @if ($item->delivery == "canceled")
                                                        <span class="btn btn-secondary btn-sm">Sin envio</span>
                                                        @else
                                                        <span class="btn btn-success btn-sm">Solicitado</span>

                                                        @endif
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ $item->created_at }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div>
                                                        @livewire('show-products-client', ['item' => $item], key($item->id))
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
