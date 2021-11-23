<div>
    <section class="section-content mb-4 mt-4">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">{{ $title }}</h3>
            </header><!-- sect-heading -->

            <div class="slider-items-owl owl-carousel owl-theme">
                @foreach ($products as $product)

                    <div class="item-slide">
                        <div class="card card-product-grid">
                            <a href="{{ route('product', $product->slug) }}" class="mt-4 mt-lg-1 img-wrap "> <img
                                    src="{{ $product->image }}"> </a>

                            <figcaption class="info-wrap">
                                <a href="{{ route('product', $product->slug) }}"
                                    class="title">{{ $product->name }}</a>
                                <div class="mt-2">
                                    <var class="price">s/ {{ $product->price }}</var>
                                    {{-- <ul class="rating-stars float-right">
                                        <li style="" class="stars-active">
                                            @for ($i = 0; $i < $product->puntaje; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            ({{ $p->puntaje }})
                                        </li>
                                    </ul> --}}
                                </div>
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                @endforeach
                <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
</div>
