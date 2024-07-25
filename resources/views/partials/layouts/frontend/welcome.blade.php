</br>
<marquee style="background-color: #8c8c8d" behavior="scroll" direction="left" scrollamount="10">
    <div  class="image-container">
    <h2>Y'A PAS D'ANNOCES POUR LE MOMENTS!!!!</h2>
    </div>
</marquee>
<div style="">
    <section class="py-5">
        <center style="text-align: center"  id="domaines">
            <h2 class="text-dark mdi mdi-domain">
                <b>NOS FORMATIONS DISPONIBLES</b>
            </h2>
            <span>Vous pouvez voici ici les <b>domaines</b> dans lesquels intervient HIT-T !</span>
        </center>
    @include('partials.layouts.backend.formations.index')
        
    </section>
    {{-- SERVICES --}}
    <section class="py-5">
        <center style="text-align: center"  id="services">
            <h2 class="text-dark mdi mdi-server">
                <b>NOS CATEGORIES DE SERVICES</b>
            </h2>
            <span>Vous pouvez trouver les <b>categories</b> ou type de <i>services</i> qu'HIT-T vous offres !</span>
        </center>

    <section class="py-5">

        <div class="container px-2 px-lg-2 mt-2">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/images/1704666725-1MOIS-1SEMAINEOK.png') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">FORMATIONS ACCELEREE</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                                
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-submit mt-auto" href="#">Au Panier</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- BOUTIQUES --}}
    {{-- <section class="py-5">
        <section class="py-5">
            <center style="text-align: center"  id="boutiques">
                <h2 class="text-dark mdi mdi-shopping">
                    <b>BOUTIQUES</b>
                </h2>
                <span>Vous pouvez trouver ici Nos <b>Produits & Articles</b>...</span>
            </center>
            <div class="container px-2 px-lg-2 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($produits as $produit)
                    <style>
                        .card-text {
                            overflow: hidden;
                            text-overflow: ellipsis;
                            max-height: 50px;
                            white-space: nowrap;
                        }

                        .card-text.expanded {
                            max-height: none;
                            white-space: normal;
                        }

                    </style>

                    <div class="col mb-5">
                        <div class="card h-100" style="box-shadow: #2222ff62">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/' . $produit->imageproduit) }}" alt="{{ $produit->imageproduit }}" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder ">{{ $produit->nomproduit }}</h5>
                                    <!-- Product price-->
                                    {{ number_format((float) $produit->prixproduit, 2, ',', ' ') }} FCFA
                                </div>
                                <div class="text-center">
                                    <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; max-height: 50px;">
                                        {{ $produit->descriptionproduit }}
                                    </p>
                                    <a href="#"  class="btn btn-link p-0" onclick="toggleDescription(this)">Voir plus</a>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <form action="{{ route('add.to.cart', $produit->id) }}" method="post">
                                    @csrf
                                    <div class="text-center"><button class="btn btn-outline-submit mt-auto" type="submit">Au Panier</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <script>
                    function toggleDescription(element) {
                        const cardText = element.previousElementSibling;
                        if (cardText.classList.contains('expanded')) {
                            cardText.classList.remove('expanded');
                            element.textContent = 'Voir plus';
                        } else {
                            cardText.classList.add('expanded');
                            element.textContent = 'Voir moins';
                        }
                    }

                </script>
    </section> --}}
    {{-- PUBLICITES --}}
    <section class="py-5">
        <center style="text-align: center"  id="pubs">
            <h2 class="text-dark mdi mdi-publish">
                <b>LES PUBLICITES</b>
            </h2>
            <span>Vous pouvez trouver ici les offres de publicités !</span>
        </center>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/images/1704666725-1MOIS-1SEMAINEOK.png') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">FORMATIONS ACCELEREE</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-submit mdi mdi-cart mt-auto" href="#">Au Panier</a></div>
                        </div>
                        <div class="text-center card-footer p-4 pt-2 border-top-0 " style="align-items: center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
                                <img src="{{ asset('images/sm/3.png') }}" alt="Partager sur Facebook">
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=" target="_blank">
                                <img src="{{ asset('images/sm/2.png') }}" alt="Partager sur Twitter">
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=" target="_blank">
                                {{-- {{ urlencode(request()->fullUrl()) }}&title={{ urlencode($produit->nomproduit) }} --}}
                                <img src="{{ asset('images/sm/1.png') }}" alt="Partager sur LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <marquee style="background: linear-gradient(to left bottom, #b8b8b8, #ffffff, #b8b8b8);" behavior="scroll" direction="left" scrollamount="10">
        <div  class="image-container">
        <h2>Y'A PAS D'ANNOCES POUR LE MOMENTS!!!!</h2>
        </div>
    </marquee>


</div>
