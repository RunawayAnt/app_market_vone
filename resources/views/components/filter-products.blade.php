<header class="border-bottom mb-4 pb-3">
    <div class="form-inline">
        <span class="mr-md-auto">{{ $count }} productos actualmente</span>
        {{-- <select class="mr-2 form-control pr-4">
            <option>Latest items</option>
            <option>Trending</option>
            <option>Most Popular</option>
            <option>Cheapest</option>
        </select> --}}

    </div>
</header><!-- sect-heading -->
<div class="row">
    @foreach ($products as $item)
        <div class="col-md-4">
            <figure class="card card-product-grid">
                <div class="img-wrap">
                    {{-- <span class="badge badge-danger"> NEW </span> --}}
                    <img src="{{ $item->image }}">
                    <a class="btn-overlay" href="{{ route('product', $item->slug) }}"><i
                            class="far fa-eye mr-2"></i>Visualizar producto</a>
                </div> <!-- img-wrap.// -->
                <figcaption class="info-wrap">
                    <div class="fix-height">
                        <a href="{{ route('product', $item->slug) }}" class="title">{{ $item->name }}</a>
                        <div class="price-wrap mt-2">
                            <span class="price">s/ {{ $item->price }}</span>
                            {{-- <del class="price-old">$1980</del> --}}
                        </div> <!-- price-wrap.// -->
                    </div>
                    @auth
                        @can('client.home')
                            @livewire('cart-additem', ['product' => $item], key($item->id))
                        @endcan
                    @else
                        @livewire('cart-additem', ['product' => $item], key($item->id))
                    @endauth
                </figcaption>
            </figure>
        </div> <!-- col.// -->
    @endforeach

    {{-- <div class="text-center m-4">
        {!! $products !!}
    </div> --}}

</div> <!-- row end.// -->
