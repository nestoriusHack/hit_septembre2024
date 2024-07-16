{{-- <section>
    <div class="full-bot-book">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</section> --}}



{{-- <section class="">
    <div class="container com-sp pad-bot-70">

        <div class="row wed-foot-link">
            <div class="col-md-4 foot-tc-mar-t-o">
                {{-- <h4><div class="col-md-2 bb-img">
                    <img src="images/3.png" alt="">
                </div></h4>
                <div class="row">

                    <h4>PUBLIER UNE OFFRE DE PUBLICITES </h4>
                    <h4>
                        <center>
                            <form action="{{ ('') }}" method="get">
                                <input type="email" id="newsletterEmail" required placeholder="Votre Email" name="newsletteremail">
                                <button class="btn-submit"  type="submit" id="">PUBLICITES</button>

                            </form>
                        </center>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <h4>
                    <form action="{{ ('subscribers.store') }}" method="post" id="newsletterForm" >
                        @csrf
                        <div class="">
                            <center><label for="newsletterEmail"><h4>SIGN UP FOR NEWSLETTER</h4></label></center>
                            <input type="email" id="newsletterEmail" required placeholder="ADRESSE EMAIL" name="email">
                            <center><button class="btn-submit" type="submit" id="subscribeButton">ABONNEZ-VOUS</button></center>
                        </div>
                    </form>
               </h4>

            </div>
            <div class="col-md-4">
                <h4>
                    <div class="col-md-2 bb-img">
                        <img src="{{ asset('assets/images/1711114336-WhatsApp Image 2024-03-05 at 15.48.11.jpeg') }}" style="width: 280px"  alt="">
                    </div>
                </h4>
            </div>
        </div>

    </div>
</section> --}}

<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">

        <div class="row wed-foot-link">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>PRESENTATION</h4>
                <h4>Formation à la carte sur toute l'année</h4>
                <ul>
                    <li><a href="frlivre">Formation en</a></li>
                    <li><a href="frmaterielle">Formation en</a></li>

                    <li><a href="frhabillement">Formation en</a></li>
                    <li><a href="frboutique">Formation en</a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <h4>LIENS UTILES</h4>
                <ul>
                    <li><a href="frservice">Domaines</a></li>
                    <li><a href="frformation">Formations</a></li>
                    <li><a href="frformation">Boutiques</a></li>
                    <li><a href="frconsultation">Consultations</a></li>

                    <li><a href="frhistory">Programmes et événements </a></li>
                    <li><a href="frimmobilier">Immobiliers</a></li>



                </ul>
            </div>
            <div class="col-md-3">
                <h4>CONTACTS</h4>
                <ul>
                    <li><a href="#">(+228)97 31 77 52</a>
                    </li>
                    <li><a href="#">(+228)90 47 51 03</a>
                    </li>
                    <li><a href="#">(+228)96 54 52 54</a>
                    </li>
                    <li><a href="mailto:formationfacile.hitt.tg@gmail.com">Email:formationfacile.hitt.tg@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="icon-float">
        <ul>
            <li><a href="https://www.facebook.com/hittechnologieservices/" class="fb1" target="_blank"><i class="mdi mdi-facebook" aria-hidden=""></i></a> </li>
            <li><a href="https://twitter.com/David16340749" class="tw1" target="_blank"><i class="mdi mdi-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="https://www.linkedin.com/in/hit-t-sarl-u-41a22a46/" class="li1" target="_blank"><i class="mdi mdi-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="https://chat.whatsapp.com/Hdd8kvdpyZH1q4jcrsPcGq" class="wa1"target="_blank" ><i class="mdi mdi-whatsapp" aria-hidden="true"></i></a> </li>
            <li><a href="https://t.me/@davidhit/" class="sh1" target="_blank"><i class="mdi mdi-send" aria-hidden=""></i></a> </li>
        </ul>
    </div>
</section>

           <!-- Footer-->
        <footer class="py-2 bg-dark">
            <div class=""><p class="m-0 text-center text-white">Copyright &copy; HIT 2024</p></div>
        </footer>

<script>


    document.addEventListener("DOMContentLoaded", function() {
        const newsletterForm = document.getElementById("newsletterForm");
        const subscribeButton = document.getElementById("subscribeButton");
        const newsletterSuccessMessage = document.getElementById("newsletterSuccessMessage");

        subscribeButton.addEventListener("click", function() {
            const emailInput = document.getElementById("newsletterEmail").value;

            if (isValidEmail(emailInput)) {

                alert("Merci d'avoir rejoint notre Newsletter! .");
                // Envoyer l'adresse e-mail au serveur (étape ultérieure)
                // ...


                // Afficher le message de réussite
            // newsletterSuccessMessage.classList.remove("hidden");
            //} else {
                //alert("Merci d'avoir rejoint notre Newsletter! ðÂÂÂÂÂÂÂÂÂ Nous avons bien reçu votre adresse e-mail. Restez à l'affût pour recevoir nos dernières actualités et offres exclusives.");
            //}
        });

        function isValidEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
    });


</script>


<style>
    #newsletterEmail {
    background-color: white;
    /* Autres styles personnalisés */
}
</style>
