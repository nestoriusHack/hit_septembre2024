<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Nestorius_Code">
    <meta name="description" content="HIT ECOMMERCE, HIT,hit,hit service,boutique,togo, togo hit, HIT-TECHNOLOGIES, HIT SERVICES; online SHOP">
    <title>@yield('title', 'HIT-TECHNOLOGIE')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-mob.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/1704666167-Logonew.png') }}" />
</head>
<body>
    @include('partials.layouts.frontend.navebar')


    @yield('content')

    @include('partials.layouts.frontend.sidebar')
    <!-- Bootstrap Bundle with Popper -->
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=YOUR_PROPERTY_ID&product=inline-share-buttons' async='async'></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
