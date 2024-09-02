<div>
    <!-- Notification Banner -->
    <div style="background-color: #8c8c8d; padding: 10px;">
        <h2 style="text-align: center; color: white;">Y'A PAS D'ANNONCES POUR LE MOMENT !!!!</h2>
    </div>

    <!-- Formations Section -->
    <style>
        .card-img-top {
          width: 100%;
          height: 200px; /* Définissez la hauteur fixe */
          object-fit: cover; /* Recadre l'image pour remplir le conteneur */
        }
        .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 300px; /* Ajustez selon vos besoins */
        }

        .card-body {
        flex-grow: 1;
        }


        .card-text {
        max-height: 100px; /* Limitez la hauteur de la description */
        overflow: hidden;
        text-overflow: ellipsis;
        }

        .card-footer {
        text-align: center;
        }

    </style>

@include('partials.layouts.backend.formations.index', ['formations' => $formations])




    <!-- Services Section -->
    <section class="py-5  bg-opacity-10">
        <div class="container">
            <center id="services">
                <h2 class="text-dark mdi mdi-server"><b>NOS CATÉGORIES DE SERVICES</b></h2>
                <span>Découvrez les <b>catégories</b> ou types de <i>services</i> qu'HIT-T vous offre !</span>
            </center>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center mt-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('assets/images/1704666725-1MOIS-1SEMAINEOK.png') }}" alt="Formations Accélérées" />
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">FORMATIONS ACCÉLÉRÉES</h5>
                            <p>$40.00 - $80.00</p>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <a class="btn btn-outline-submit mt-auto" href="#">Au Panier</a>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez plus de services ici si nécessaire -->
            </div>
        </div>
    </section>
</div>

<!-- Additional Scripts -->
<script>
    function toggleDescription(element) {
        const cardText = element.previousElementSibling;
        cardText.classList.toggle('expanded');
        element.textContent = cardText.classList.contains('expanded') ? 'Voir moins' : 'Voir plus';
    }
</script>
