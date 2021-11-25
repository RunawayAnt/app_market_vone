<!-- Bootstrap-ecomerce-->
<!-- jQuery -->
<script src="{{ asset('bootstrap-ecomerce/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap4 files - warning!-->
<script src="{{ asset('bootstrap-ecomerce/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap css -->
<link href="{{ asset('bootstrap-ecomerce/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

<!-- custom style -->
<link href="{{ asset('bootstrap-ecomerce/css/ui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bootstrap-ecomerce/css/responsive.css') }}" rel="stylesheet"
    media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="{{ asset('bootstrap-ecomerce/js/script.js') }}" type="text/javascript"></script>

<!-- plugin: slickslider -->
<link href="{{ asset('bootstrap-ecomerce/plugins/slickslider/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bootstrap-ecomerce/plugins/slickslider/slick-theme.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('bootstrap-ecomerce/plugins/slickslider/slick.min.js') }}" type="text/javascript"></script>

<!-- plugin: owl carousel  -->
<link href="{{ asset('bootstrap-ecomerce/plugins/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('bootstrap-ecomerce/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
<script src="{{ asset('bootstrap-ecomerce/plugins/owlcarousel/owl.carousel.min.js ') }}"></script>

<!-- ui style -->
<link href="{{ asset('bootstrap-ecomerce/css/ui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bootstrap-ecomerce/css/responsive.css') }}" rel="stylesheet" />

@if (Route::is('home') || Route::is('contact')|| Route::is('product'))
    <!-- ui javascript -->
    <script src="{{ asset('bootstrap-ecomerce/js/script.js') }}" type="text/javascript"></script>

    <!-- slider elements javascript -->
    <script src="{{ asset('bootstrap-ecomerce/js/slider-elements.js') }}" type="text/javascript"></script>
@endif

{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
{{-- <!-- Font awesome 5 -->
                <link href="/becomerce/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet"> --}}
{{-- <link href="/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet"> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
