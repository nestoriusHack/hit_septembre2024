@foreach ($formations as $formation )
<div class="container px-2 px-lg-2 mt-2">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

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
            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{ asset('storage/' . $formation->photo) }}" alt="{{ $formation->nom }}" />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{{ $formation->nom }}</h5>
                        <!-- Product description-->
                        <p>{{ Str::limit($formation->desc, 100) }}</p>
                        <!-- Product price-->

                        <p><strong>Prix: </strong>{{ number_format((float) $formation->prix, 2, ',', ' ') }} FCFA</p>
                        <!-- Date created -->
                    <p><small>Ajoutée le : {{ $formation->created_at->format('d/m/Y') }}</small></p>

                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-submit mt-auto" href="{{ route('formations.show', $formation->id) }}">Voir Détails</a></div>
                </div>
                <div class="hom-list-share">
                    <ul>
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
 @endforeach




