<!DOCTYPE html>
    <html lang="fr">
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
                <link rel="stylesheet" href="{{ asset('maj/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
                <!-- Custom CSS -->
                <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

                <link href="{{ asset('assets/css/materialize.css')}}" rel="stylesheet">

                <link href="{{ asset('assets/css/style-mob.css')}}" rel="stylesheet">
                <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
                <link href="{{ asset('ow/css/owl.carousel.css')}}" rel="stylesheet">
                <link href="{{ asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
                <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">

                <link type="text/css" rel="stylesheet" href="{{ asset('assets/elc/slick.css') }}"/>
                <link type="text/css" rel="stylesheet" href="{{ asset('assets/elc/slick-theme.css') }}"/>
                <link type="text/css" rel="stylesheet" href="{{ asset('ow/css/owl.carousel.css') }}"/>

                <!-- nouislider -->
                <link type="text/css" rel="stylesheet" href="{{ asset('assets/elc/nouislider.min.css')}}">

                <link rel="shortcut icon" href="{{ asset('assets/images/1704666167-Logonew.png') }}" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

            </head>
        <body>
            <!-- MOBILE MENU -->
            @include('partials.layouts.frontend.navebar')

            <!--END HEADER SECTION-->

            <!-- SLIDER -->

            @yield('content')

            <!-- FOOTER COURSE BOOKING -->
            @include('partials.layouts.frontend.sidebar')
            <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
            <script src="{{ asset('assets/js/main.min.js')}}"></script>
            <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
            <script src="{{ asset('assets/js/custom.js')}}"></script>
            <!-- SOCIAL MEDIA SHARE -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!--Import jQuery before materialize.js-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="{{ asset('ow/js/owl.carousel.min.js')}}"></script>

            <script src="{{ asset('ow/js/owl.carousel.min.js')}}"></script>
            <script>
                $(document).ready(function(){
                  $('.owl-carousel').owlCarousel({
                    loop: true, // Permet au carrousel de boucler
                    margin: 10, // Espace entre les items
                    nav: true, // Affiche les boutons "précédent" et "suivant"
                    items: 1, // Nombre d'items affichés
                    autoplay: true, // Active le défilement automatique
                    autoplayTimeout: 5000, // Temps d'attente avant chaque slide (en ms)
                    autoplayHoverPause: true, // Met en pause le défilement quand on passe la souris
                  });
                });
              </script>

        </body>
    </html>
