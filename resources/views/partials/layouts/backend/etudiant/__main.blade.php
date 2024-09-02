<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Nestorius_Code">
    <meta name="description" content="HIT ECOMMERCE, HIT,hit,hit service,boutique,togo, togo hit, HIT-TECHNOLOGIES, HIT SERVICES; online SHOP">
    <title>@yield('title', 'HIT - Partie Etudiant')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('maj/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-mob.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/1704666167-Logonew.png') }}" />
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MOBILE MENU -->
    @include('partials.layouts.frontend.navebar')

    <!-- SLIDER -->
    @yield('content')

    <!-- FOOTER COURSE BOOKING -->
    @include('partials.layouts.frontend._sidebar')

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Import jQuery before materialize.js (if necessary) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>
