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
                                <input type="text" class="form-control" placeholder="Nombre o precio"
                                    wire:model='search'>
                                <div class="input-group-append">
                                    <button class="btn btn-warning" wire:click="search"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        @foreach ($categories as $category)
                            <ul class="list-menu">
                                <li><a href="{{ route('categories.category', $category->slug) }}">{{ $category->cname }} </a></li>
                            </ul>
                        @endforeach

                    </div> <!-- card-body.// -->
                </div>
            </article> <!-- filter-group  .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true"
                        class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Marcas </h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_2" style="">
                    <div class="card-body">
                        @foreach ($brands as $brand)
                            <ul class="list-menu">
                                <li><a href="{{ route('brands.band', $brand->slug) }}">{{ $brand->bname }} </a></li>
                            </ul>
                        @endforeach
                    </div> <!-- card-body.// -->
                </div>
            </article> <!-- filter-group .// -->

        </div> <!-- card.// -->

    </aside> <!-- col.// -->
    <main class="col-md-9">

        <x-filter-products :products='$products' :count='$count'></x-filter-products>


        {{-- <div class="row">

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
                <h6 class="title mx-5 my-5">No se encontraron resultados.</h6>
            @endif

        </div> <!-- row end.// --> --}}

    </main> <!-- col.// -->

</div>
