<section class="py-5 bg-opacity-10">
    <div class="container">
          <center id="domaines">
            <h2 class="text-dark mdi mdi-domain"><b>NOS FORMATIONS DISPONIBLES</b></h2>
            <span>Voici les <b>domaines</b> dans lesquels intervient HIT-T !</span>
          </center>

          <div class="owl-carousel owl-theme mt-4">
           @foreach ($formations as $formation)
              <div class="item">
                <div class="card h-100">
                  <img class="card-img-top" src="{{ asset('storage/' . $formation->photo) }}" alt="{{ $formation->nom }}" />
                  <div class="card-body d-flex flex-column" style="background-color: rgb(63, 63, 65)">
                    <h5 class="card-title text-uppercase"><strong>{{ $formation->nom }}</strong></h5>
                    <p class="card-text"><strong>Description: </strong>{{ Str::limit($formation->desc, 100) }}</p>
                    <p><strong>Prix: </strong>{{ number_format((float) $formation->prix, 2, ',', ' ') }} FCFA</p>
                    <p><small>Ajoutée le : {{ $formation->created_at->format('d/m/Y') }}</small></p>
                    <div class="mt-auto">
                      <a class="btn btn-outline-submit" href="{{ route('formations.show', $formation->id) }}">Voir Détails</a>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent">
                    <div class="text-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank">
                              <i class="fa fa-facebook"></i> Facebook
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(Request::fullUrl()) }}" target="_blank">
                              <i class="fa fa-linkedin"></i> LinkedIn
                            </a>
                          </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank">
                              <i class="fa fa-twitter"></i> Twitter
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="https://api.whatsapp.com/send?text={{ urlencode(Request::fullUrl()) }}" target="_blank">
                              <i class="fa fa-whatsapp"></i> WhatsApp
                            </a>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <script>

              </script>
            @endforeach
          </div>
    </div>
    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            loop: true, // Permet de faire défiler en boucle
            margin: 10, // Espace entre les éléments
            nav: true, // Affiche les boutons de navigation (précédent/suivant)
            responsive: {
              0: { items: 1 }, // 1 élément affiché pour les petits écrans
              600: { items: 2 }, // 2 éléments affichés pour les écrans moyens
              1000: { items: 3 } // 3 éléments affichés pour les grands écrans
            }
          });
        });
      </script>

</section>
