<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'E-commerce')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-mob.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    @include('partials.layouts.frontend.navebar')


        @yield('content')
    @include('partials.layouts.frontend._sidebar')
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
   

    <!-- SOCIAL MEDIA SHARE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('assets/js/main.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    <script src="{{ asset('assets/js/app.js')}}"></script>
</body>
</html>
