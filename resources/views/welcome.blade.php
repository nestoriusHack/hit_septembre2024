@extends('index')
@section('content')
    <!-- Navigation-->
    
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="{{ asset('part/assets/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/materialize.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-mob.css') }}">
        <link rel="stylesheet" href="{{ asset('ow/css/owl.carousel.css') }}"> --}}

        @include('partials.layouts.frontend.header')
        <!-- Section-->
       @include('partials.layouts.frontend.welcome')

    <!-- Bootstrap core JS-->

    <!-- Core theme JS-->
 {{--    <script src="{{ asset('part/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/app.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>

    <script src="{{ asset('ow/js/owl.carousel.min.js')}}"></script> --}}
@endsection
