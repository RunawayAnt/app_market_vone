    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y-sm">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Pymes asociadas</h3>
            </header><!-- sect-heading -->

            <div class="slider-items-owl owl-carousel owl-theme">
                {{-- @empty($empresas) --}}
                    <li class="nav-item">
                        <a class="nav-lin text-gray">No hay categorias</a>
                    </li>
                {{-- @else
                    @foreach ($empresas as $empresa)
                        <div class="item-slide">
                            <figure class="box item-logo text-center">
                                <a href="{{ route('company', $empresa->slug) }}"><img
                                        src="/becomerce/images/icons/empresax2.png" class="mb-3"></a>
                                <figcaption class="text-center border-top pt-3">{{ $empresa->razonsocial }}</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                    @endforeach
                @endempty --}}

            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
