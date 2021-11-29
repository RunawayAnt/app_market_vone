<div>
    <!-- ============================ COMPONENT 1 ================================= -->
    <div class="card m-2 m-lg-4 shadow-sm">
        <div class="row no-gutters">
            <aside class="col-md-6">
                <article class="gallery-wrap">
                    <div class="img-big-wrap mt-lg-4">
                        <div> <a href="#"><img src="{{ $product->image }}"></a></div>
                    </div> <!-- slider-product.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-md-6 border-left">
                <article class="content-body">

                    <h2 class="title">{{ $product->name }}</h2>

                    <div class="rating-wrap my-3">
                        <x-product-rating :qualification="$qualification"></x-product-rating>
                        <small class="label-rating text-success"> <i class="fa fa-box"></i> {{ $product->stock }}
                            en
                            stock
                        </small>
                    </div> <!-- rating-wrap.// -->
                    <div class="mb-3">
                        <var class="price h4">s/ {{ $product->price }}</var>
                        <span class="text-muted">/per kg</span>
                    </div> <!-- price-detail-wrap .// -->

                    <p>{{ $product->description }}</p>
                    <dl class="row" id="features">
                        <dt class="col-sm-3">marca</dt>
                        <dd class="col-sm-9"><a href="{{ route('brands.band',$brand->slug) }}">{{ $brand->bname }}</a></dd>
                        <dt class="col-sm-3">categoria</dt>
                        <dd class="col-sm-9"><a href="{{ route('categories.category',$category->cname) }}">{{ $category->cname }}</a></dd>
                        <dt class="col-sm-3">sku</dt>
                        <dd class="col-sm-9">{{ $product->sku }}</dd>
                    </dl>
                    @auth
                        @can('client.home')
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md flex-grow-0">
                                    <label>Cantidad</label>
                                    <div class="input-group mb-3  ">
                                        <input type="number" class="form-control" id="quantity"
                                            wire:model.defer="quantitycart">
                                    </div>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->

                            <a href="#" class="btn  btn-warning btn-lg mb-2 mb-lg-0"> Comprar ahora </a>
                            <button type="button" class="btn  btn-outline-warning btn-lg" wire:click="addProduct"> <span
                                    class="text">A&ntilde;adir al
                                    carrito</span> <i class="fas fa-shopping-cart"></i> </button>

                        @endcan
                    @else
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md flex-grow-0">
                                <label>Cantidad</label>
                                <div class="input-group mb-3  ">
                                    <input type="number" class="form-control" id="quantity"
                                        wire:model.defer="quantitycart">
                                </div>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                        <a href="#" class="btn  btn-warning btn-lg mb-2 mb-lg-0"> Comprar ahora </a>
                        <button type="button" class="btn  btn-outline-warning btn-lg" wire:click="addProduct"> <span
                                class="text">A&ntilde;adir al
                                carrito</span> <i class="fas fa-shopping-cart"></i> </button>
                    @endauth

                </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->

    <!-- ============================ COMPONENT 1 END .// ================================= -->
    <section class="section-content py-2 mb-3 bg-white">
        <div class="container ">
            <hr>
            <h6 class="text-muted mb-4">Sidebar collapses</h6>
            <div class="row">
                <aside class="col-md-8 mb-lg-4">
                    <!-- ============================ COMPONENT 1 ================================= -->
                    <div class="list-group">
                        <article class="list-group-item bg-white">
                            <header class="filter-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                    class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title text-gray">Rese&ntilde;as del producto</h6>
                                </a>
                            </header>
                            <div>
                                {{-- <div class="filter-content collapse overflow-auto" id="collapse2" style=""> --}}
                                <div class="filter-content collapse show" id="collapse1" style="">
                                    <div class="row">
                                        {{-- form comentario --}}
                                        <div class="col-12">
                                            @auth
                                                @can('client.home')
                                                    @livewire('comment-create',['product' => $product])
                                                @endcan
                                            @else

                                                <div class="bg-warning m-2 p-3 rounded">
                                                    <div class="row">
                                                        <div class="col text-white">
                                                            ¿Aun no te has afiliado?. Solo debes
                                                            <a href="{{ route('login') }}" class="text-primary">Iniciar
                                                                Sesion </a> &oacute;
                                                            @if (Route::has('register'))
                                                                <a href="{{ route('register') }}"
                                                                    class="text-primary">Registrarse</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endauth
                                        </div>
                                        {{-- lista-comentarios --}}
                                        <div class="col-12">
                                            @livewire('comments-users',['product' => $product])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div> <!-- list-group.// -->
                    <!-- ============================ COMPONENT 1 END .// ================================= -->
                </aside> <!-- col.// -->
                <aside class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <article class="card card-body border-0">
                                <h5 class="title">Tienda Oficial</h5>
                                <figure class="itemside mt-3 row">
                                    <div class="itemside  mb-2">
                                        <div class="icontext mb-1">
                                            <img class="icon icon-md rounded-circle" src="{{ $shop->logo }}">
                                        </div>
                                        <div class="info">
                                            <p class="font-weight-bold text-dark"><a
                                                    href="{{ route  ('shop',$shop->slug) }}">{{ $shop->shopname }}</a>
                                            </p>
                                            <small>{{ $shop->phone }}</small>
                                        </div>
                                    </div>
                                </figure> <!-- iconbox // -->
                            </article> <!-- panel-lg.// -->
                        </div><!-- col // -->
                    </div>
                    <!-- ============================ COMPONENT 3  ================================= -->
                    <div class="box">
                        <!-- itemside // -->

                        <div class="itemside  mb-3">
                            <div class="aside">
                                <i class="icon-xs bg-secondary rounded-circle fas fa-shield-alt white"></i>
                            </div>
                            <div class="info">
                                <small class="text-muted">Seguridad</small>
                                <p>
                                    <a href="">Protecci&oacute;n al comprador</a>
                                </p>
                            </div>
                        </div><!-- itemside // -->


                        <div class="itemside">
                            <div class="aside">
                                <i class="icon-xs bg-secondary rounded-circle fas fa-headset white"></i>
                            </div>
                            <div class="info">
                                <small class="text-muted">Ayuda ySoporte</small>
                                <p>
                                    <a href="">Acesor&iacute;a telef&oacute;nica: (01)
                                        7500-451</a>
                                </p>
                            </div>
                        </div><!-- itemside // -->
                    </div>
                    <!-- ============================ COMPONENT 3 END .// ================================= -->

                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container .//  -->

    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <script>
        // // const data = @json($features);
        // // const features = document.getElementById('features');
        // const quantity = document.getElementById('quantity');
        // let index = 1;
        // // let parsedata = JSON.parse(data);
        // // for (const key in parsedata) {
        // //     features.innerHTML += '<dt class="col-sm-3">' + key + '</dt><dd class="col-sm-9">' + parsedata[key] + '</dd>';
        // // }
        // document.getElementById('button-plus').onclick = function() {
        //     if (index < parseInt(quantity.getAttribute('max'))) {
        //         index += 1;
        //         quantity.value = index;
        //     }
        // }
        // document.getElementById('button-minus').onclick = function() {
        //     if (index > 1) {
        //         index -= 1;
        //         quantity.value = index;
        //     }
        // }
    </script>
</div>
