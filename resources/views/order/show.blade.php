@extends('layouts.layout')

@section('title', 'Pago | Market App')

@section('content')
    <div>
        <section class="section-pagetop bg-white">
            <div class="container">
                <header class="section-heading">
                    <h2 class="section-title text-warning">Confirmacion de pago</h2>
                </header><!-- sect-heading -->
                <p>Si desea editar su informacion personal, puede acceder a "Ajustes de compra" desde su perfil ubicado
                    en la barra de navegacion o hacer click en el boton de abajo.</p>
            </div>
        </section>
        <section class="section-content padding-y bg">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-9">
                        <!-- ============================ COMPONENT 3  ================================= -->
                        <div class="card mb-3 shadow-md">
                            <article class="card-body">
                                <header class="mb-4">
                                    <h4 class="card-title">Revisar carrito</h4>
                                </header>
                                <div class="row">
                                    @foreach ($products as $item)
                                        <div class="col-md-6">
                                            <figure class="itemside  mb-3">
                                                <div class="aside"><img src="{{ $item->attributes->image }}"
                                                        class="border img-xs"></div>
                                                <figcaption class="info">
                                                    <p>{{ $item->name }}</p>
                                                    <span>{{ $item->quantity }}x {{ $item->price }} = Total: s/
                                                        {{ $item->quantity * $item->price }} </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div> <!-- row.// -->
                            </article> <!-- card-body.// -->
                            <article class="card-body border-top">
                                <dl class="row">
                                    <dt class="col-sm-10">Subtotal:</dt>
                                    <dd class="col-sm-2 text-right"><strong>s/ {{ $subtotal }}</strong></dd>
                                    @if ($delivery == 'confirm')
                                        <dt class="col-sm-10">Gastos de env&iacute;o:</dt>
                                        <dd class="col-sm-2 text-right"><strong>s/ {{ $pricedelivery }}</strong></dd>
                                        <dt class="col-sm-10">Total:</dt>
                                        <dd class="col-sm-2 text-right"><strong class="h5 text-dark">s/
                                                {{ $total + $pricedelivery }}</strong></dd>
                                    @else
                                        <dt class="col-sm-10">Total:</dt>
                                        <dd class="col-sm-2 text-right"><strong class="h5 text-dark">s/
                                                {{ $total }}</strong></dd>
                                    @endif
                                </dl>
                            </article> <!-- card-body.// -->
                            <article class="card-body border-top">
                                <dl class="row">
                                    <dt class="col-sm-10">Metodo de pago:</dt>
                                    <dd class="col-sm-2 text-right"><strong>{{ $methodpayment[0]->name }}</strong>
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Datos de transferencia:</dt>
                                    <dd class="col-sm-6 text-right">{{ $methodpayment[0]->description }}</dd>
                                </dl>
                                <form action="{{ route('client.order.confirm') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <dl class="row mt-5">
                                        <dt class="col-sm-6">Abjuntar comprobante:</dt>
                                        <dd class="col-sm-6 text-right">
                                            <input type="file" name="image" accept="image/*">
                                            <x-jet-input-error for="image" />

                                            <input type="hidden" name="delivery" value="{{$delivery}}">
                                            <input type="hidden" name="pricedelivery" value="{{$pricedelivery}}">
                                            <input type="hidden" name="methodpayment" value="{{$methodpayment[0]->name}}">
                                        </dd>
                                    </dl>
                                    <dl class="row mt-4">
                                        <dt class="col-sm-6"></dt>
                                        <dd class="col-sm-6 text-right">
                                            <button type="submit" class="btn btn-dark">Confirmar pago</button>
                                        </dd>
                                    </dl>
                                </form>
                            </article> <!-- card-body.// -->
                        </div> <!-- card.// -->
                        <!-- ============================ COMPONENT 3  ================================= -->
                    </aside> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    </div>
@endsection
