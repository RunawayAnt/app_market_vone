@extends('layouts.layout')

@section('title', 'Contactanos | Market App')

@section('content')

    <section class="section-name bg text-gray-light p-2 pt-5">
        <div class="container">

            <header class="section-heading text-center">
                <h1 class="section-title text-gray">Cont&#225;ctenos</h1>
                <h4 class="font-weight-normal">Sus opiniones, comentarios y sugerencias son bienvenidos ya que a partir de
                    ellos
                    podemos ofrecerle un mejor servicio.</h4>
            </header><!-- sect-heading -->

        </div><!-- container // -->
    </section>

    <!-- ============================ SECTION INFO .// ================================= -->
    <section class="section-content padding-y bg">
        <div class="container">

            <!-- ============================ COMPONENT 1 ================================= -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <article class="card card-body">
                        <figure class="text-center p-5">
                            <span class="rounded-circle icon-md"><i class="text-warning fas fa-home fa-2x"></i></span>
                            <figcaption class="pt-4">
                                <h5 class="title">Direccion</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div><!-- col // -->
                <div class="col-md-4 mb-3">
                    <article class="card card-body bg-warning">
                        <figure class="text-center p-5">
                            <span class="rounded-circle icon-md"><i class="text-white fas fa-phone fa-2x"></i></span>
                            <figcaption class="pt-4 text-white">
                                <h5 class="title text-white">Telefonos</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div> <!-- col // -->
                <div class="col-md-4 mb-3">
                    <article class="card card-body">
                        <figure class="text-center p-5">
                            <span class="rounded-circle icon-md"><i class="text-warning fas fa-envelope fa-2x"></i></span>
                            <figcaption class="pt-4">
                                <h5 class="title">Email</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div> <!-- col // -->
            </div>
        </div> <!-- container .//  -->
    </section>
    <!-- ============================ SECTION INFO END .// ================================= -->

    <!-- ============================ SECTION FORM CONTACT .// ================================= -->
    <section class="section-content pt-3 bg-warning">
        <div class="container">
            <div class="row">
                <aside class="col-lg-7 text-center">
                    <figcaption class=" text-white mt-4 text-center">
                        <h5 class="title text-white">D&#233;janos tu mensaje</h5>
                        <p> Cont&#225;ctenos si tiene alguna pregunta, quiere dejar un comentario o si necesita mas
                            información
                            sobre los productos que ofrecemos.</p>
                    </figcaption>
                    <img src="/becomerce/images/Precioso telescopio.png" alt="" class="w-75 pt-2">
                </aside>
                <aside class="col-lg-5">

                    <!-- ============================ COMPONENT FEEDBACK  ================================= -->
                    <div class="card m-4 p-2 shadow-lg">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Contactenos</h4>
                            <form>
                                <div class="form-group">
                                    <label>Nombres y Apellidos</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Comentario</label>
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                                <button class="btn btn-warning btn-block">Enviar</button>
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->
                    <!-- ============================ COMPONENT FEEDBACK END.// ================================= -->
                </aside>
                </aside>
            </div> <!-- row.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ============================ SECTION FORM CONTACT END .// ================================= -->

@endsection
