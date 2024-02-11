<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

</div>

<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Company name</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        locate
                    </li>
                </ul>
            </div>

            {{--                    <div class="col-md-4 pt-5">--}}
            {{--                        <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>--}}
            {{--                        <ul class="list-unstyled text-light footer-link-list">--}}
            {{--                            <li><a class="text-decoration-none" href="#">Luxury</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Sport Wear</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Popular Dress</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>--}}
            {{--                            <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </div>--}}

            <div class="col-md-4 pt-5 row">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list w-50">
                    <li><a class="text-decoration-none" href="{{ route('about') }}">About</a></li>
                    <li><a class="text-decoration-none" href="{{ route('map') }}">Map</a></li>
                    <li><a class="text-decoration-none" href="{{ route('partners') }}">Partners</a></li>
                </ul>
                <ul class="list-unstyled text-light footer-link-list w-50">
                    <li><a class="text-decoration-none" href="{{ route('actual') }}">Actual</a></li>
                    <li><a class="text-decoration-none" href="#">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2024 Company Name
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

</body>

@yield('content')

@yield('script')
</body>
</html>
