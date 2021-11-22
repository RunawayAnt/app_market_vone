@if ($shops)
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y-sm">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Pymes asociadas</h3>
            </header><!-- sect-heading -->

            <div class="slider-items-owl owl-carousel owl-theme">
                @foreach ($shops as $shop)
                    <div class="item-slide">
                        <figure class="box">
                            <a href="{{ $shop->slug }}"><img src="{{ $shop->logo }}" class="mb-3 rounded-circle"></a>
                            <figcaption class="text-center border-top pt-3">{{ $shop->shopname }}</figcaption>
                        </figure> <!-- item-logo.// -->
                    </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endif
