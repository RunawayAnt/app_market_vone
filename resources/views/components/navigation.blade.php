<header class="section-header">
    <x-navigation-head />
    <!-- header-nav .// -->
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-12 text-center">
                    <div class="brand-wrap">
                        <img class="logo" src="../images/logo.png">
                    </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-xl-5 col-sm-8 col-12">
                    <!-- navigation search -->
                    <x-navigation-search />
                </div> <!-- col.// -->
                <div class="col-lg-5 col-xl-4 col-sm-12">
                    <x-navigation-profile />
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
    <!-- header-main| profile - search.// -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom bg-warning">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        @empty($categories)
                            <li class="nav-item">
                                <a class="nav-lin text-gray">No hay categorias</a>
                            </li>
                        @endempty
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="">Todos</a>
                        </li> --}}
                        @foreach ($categories as $item)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $item->slug }}">{{ $item->cname }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- container .// -->
    </nav>
    <!-- header-categories .// -->
</header> <!-- section-header.// -->
<!-- section-header.// -->
