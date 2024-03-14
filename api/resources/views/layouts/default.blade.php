<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>D’METROPOLE HÀ TĨNH</title>
    <link rel="shortcut icon" href="{{ asset('images/logos/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-5.14.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/nice-select/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="page-wrapper">
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <img src="{{ asset('a.jpg') }}" alt="" srcset="">xxxxx

        @include('layouts.header')
        @yield('main-content')
    </div>

    <script src="{{ asset('/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/appear.min.js') }}"></script>
    <script src="{{ asset('/vendor/slick/js/slick.min.js') }}"></script>
    <script src="{{ asset('/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
