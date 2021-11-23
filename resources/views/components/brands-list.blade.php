<div>
    <section class="section-content mb-4 mt-4">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">{{ $title }}</h3>
            </header>
            <!-- sect-heading -->

            <div class="slider-items-owl owl-carousel owl-theme">

                @foreach ($brands as $brand)
                    <div class="item-slide">
                        <figure class="card card-product-grid">
                            <div class="text-center mt-4">
                                 <i class="fas fa-tshirt fa-4x text-warning"></i>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate"><a href="#">{{$brand->bname}}</a></h6>
                            </figcaption>
                        </figure> <!-- card // -->
                    </div>
                @endforeach

            </div>
        </div> <!-- container .//  -->
    </section>
</div>
