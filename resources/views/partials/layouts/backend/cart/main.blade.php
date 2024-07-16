<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Nestorius_Code">
    <meta name="description" content="HIT ECOMMERCE, HIT,hit,hit service,boutique,togo, togo hit, HIT-TECHNOLOGIES, HIT SERVICES; online SHOP">
    <title>@yield('title', 'HIT-TECHNOLOGIE')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="{{ asset('maj/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-mob.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('ow/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/1704666167-Logonew.png') }}" />
</head>
<body>
    @include('partials.layouts.frontend.navebar')

    <div class="container mt-5">
        <h2 class="mb-3">HIT-T | Shopping Add To Cart</h2>

        @php
        $totalQuantity = 0;
        @endphp

        @if(session('cart'))
            @foreach(session('cart') as $item)
                @php
                $totalQuantity += $item['quantity'];
                @endphp
            @endforeach
        @endif

        <div class="col-12">
            <div class="dropdown">
                <a class="btn btn-outline-dark" href="{{ url('cart-list') }}">
                   <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger" id="cart-quantity">{{ $totalQuantity }}</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif

    </div>
    @yield('content')
    @include('partials.layouts.frontend.sidebar')

    <!-- SECTION LOGIN, REGISTER AND FORGOT PASSWORD -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('ow/js/owl.carousel.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
