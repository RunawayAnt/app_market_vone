<div class="row">
    <aside class="col-md-3">

        <div class="card">
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                        class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Tipo de producto</h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_1" style="">
                    <div class="card-body">
                        <div class="pb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar producto"
                                    wire:model='search'>
                                <div class="input-group-append">
                                    <div class="btn btn-light"><i class="fa fa-search"></i></div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-menu">
                            <li><a href="#">People </a></li>
                        </ul>

                    </div> <!-- card-body.// -->
                </div>
            </article> <!-- filter-group  .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true"
                        class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Brands </h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_2" style="">
                    {{-- <div class="card-body">
                        @foreach ($brands as $brand)
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" wire:model="activeBrand"
                                    id="{{ $brand->id }}">
                                {{ $activeBrand }}
                                <div class="custom-control-label">{{ $brand->bname }}
                                    <b class="badge badge-pill badge-light float-right">0</b>
                                </div>
                            </label>
                        @endforeach


                    </div> <!-- card-body.// --> --}}
                </div>
            </article> <!-- filter-group .// -->

        </div> <!-- card.// -->

    </aside> <!-- col.// -->
    <main class="col-md-9">

        <div class="row">

            @if ($products->count())
                @foreach ($products as $item)
                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ $item->image }}">
                                <a class="btn-overlay" href="{{ route('product', $item->slug) }}"><i
                                        class="fa fa-search-plus"></i> Ver producto</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">{{ $item->name }}</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">s/ {{ $item->price }}</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-primary">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                @endforeach
            @else
                <h6 class="title">No hay resultados para "{{ $search }}".</h6>
            @endif

        </div> <!-- row end.// -->

    </main> <!-- col.// -->

</div>
