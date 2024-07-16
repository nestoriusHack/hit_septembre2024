@extends('index')
@section('content')
<div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form action="{{ route('showformation') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="sf-type">
                            <div class="sf-input">
                                <input type="text" id="sf-box" name="q" placeholder="Rechercher">
                            </div>

                        </div>
                        <div class="sf-submit">
                            <input type="submit" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2><span> Les formations</span></h2>
                <p></p>
            </div>
        </div>
        <div class="row">
            @foreach ($formation as $formations)
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('public/images') }}/{{ $formations->photo }}" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>{{$formations->nom}}</h3>
                            </a>
                            <h4></h4>
                            <p>{{$formations->desc}}</p> <span class="home-top-cour-rat"></span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="frdemande"><i class="fa fa-bar-chart" aria-hidden="true"></i> Devis</a> </li>

                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" ><i class="fa fa-share-alt" aria-hidden="true"  >
                                    </i> Facebook</a> </li>
                                    <li><a href="https://www.linkedin.com/shareArticle?url={{ urlencode(Request::fullUrl()) }}" target="_blank" ><i class="fa fa-share-alt" aria-hidden="true"  >
                                    </i> LinkedIn</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
