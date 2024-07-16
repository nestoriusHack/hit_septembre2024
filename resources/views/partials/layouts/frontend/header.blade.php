{{-- <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <img src="{{ asset('assets/images/ordi.jpeg') }}" style="width: auto" alt="">

        </div>
    </div>
</header> --}}
<section>
    {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slider1 active">
                @foreach ($slide as $slides)
                <img src="{{ asset('images') }}/{{ $slides->photo1}}" alt="">
                @endforeach
                <div class="carousel-caption slider-con">
                   <h2 style"color: black; ">Bienvenue à HIT-T Formation</h2>
                    <p></p>
                    <a href="frformation" class="bann-btn-1">Formation</a><a href="frdomaine" class="bann-btn-1">Domaines</a>
                </div>
            </div>
            <div class="item">
                @foreach ($slide as $slides)
                <img src="{{ asset('images') }}/{{ $slides->photo2}}" alt="">
                @endforeach
                <div class="carousel-caption slider-con">
                    <h2>Inscription ouverte 2023<span></span></h2>
                    <p></p>
                    <a href="frhistory" class="bann-btn-1">Programmes</a><a href="frlearning" class="bann-btn-1">Cours disponible</a>
                </div>
            </div>
            <div class="item">
                @foreach ($slide as $slides)
                <img src="{{ asset('images') }}/{{ $slides->photo3}}" alt="">
                @endforeach
                <div class="carousel-caption slider-con">
                    <h2>Formation à la carte sur toute l'année <span></span></h2>
                    <p></p>
                    <a href="frservice" class="bann-btn-1">Service</a><a href="frpublicite" class="bann-btn-1">Publicité</a>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->

        <div class="carousel-inner">
            <div class="item slider1 active">
                <img src="{{ asset('assets/images/slider/HIT-T_7.png')}}" alt=""  style=" width: 1400px; height: 700px;">
                <div class="carousel-caption slider-con">
                    <h2><b>Bienvenue a HIT-T Formation</b></h2>
                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                    {{-- <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> --}}
                    <a href="frformation" class="bann-btn-1">Formations</a><a href="frdomaine" class="bann-btn-2">Domaines</a>
                </div>

            </div>

            {{-- @foreach ($slide as $slides) --}}
            <div class="item" >
                {{-- {{ $slides->photo1}} --}}
                <img src="{{ asset('images/HIT-T_35.JPG')}}" alt="" style=" width: 1400px; height: 700px;">
                <div class="carousel-caption slider-con">
                    <h2><b>Formation à la carte sur toute l'année</b></h2>
                    <p></p>
                    <a href="frformation" class="bann-btn-1">Formations</a><a href="frdomaine" class="bann-btn-2">Domaines</a>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="mdi mdi-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="mdi mdi-chevron-right slider-arr"></i>
        </a>
    </div>

</section>
