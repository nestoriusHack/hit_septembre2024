<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="#"><img src="images/logosarl.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>Menus</h4>
                        <ul>
                            <li><a href="frservice">Services</a></li>
                            <li><a href="frformation">Formation</a></li>
                            <li><a href="frconsultation">Consultation</a></li>
                            <li><a href="frlearning">Cours disponibles</a></li>
                            <li><a href="frimmobilier">Immobiliers</a></li>
                            <li><a href="frpublicite">Publicités</a></li>
                            <li><a href="frpublicite">Domaines</a></li>
                            <li><a href="frhistory">Programme et evenement</a></li>

                        </ul>
                        <h4>Compte utilisateurs</h4>
                        <ul>
                            <li><a href="{{ route("login") }}" >Connexion</a></li>
                            <li><a href="{{ route("register") }}" >S'inscrire</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <style>


        .etudiant-menu {
            position: relative;
            display: inline-block;
        }



        .etudiant-menu:hover .etudiant-submenu {
            display: block;
        }

        .etudiant-submenu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            top: 100%;
            left: 0;
        }

        .etudiant-submenu li {
            display: block;
        }

        .etudiant-submenu a {
            color: #000000;
            padding: 10px 20px;
            text-decoration: none;
        }

        .wed-logo img {
            max-width: 100%;
            height: auto; /* Cela permet à la hauteur de s'ajuster automatiquement pour maintenir les proportions de l'image. */
        }


    </style>

    <!-- TOP BAR -->
    <style>
        .static-background {
            background-color: #012452; /* Remplacez ceci par votre couleur de fond */
            /* Ajoutez d'autres styles de fond si nécessaire */
             /* Texte blanc pour un contraste élevé */

        }
    </style>

    <div class="search-top">

            <div class="container">
                <div  class="container">
                    <div class="row">
                        <div class="col-md-15 text-center">
                            <div style="text-shadow: #000000;" class="ed-com-t1-left">
                                <ul>
                                    <li><a class="mdi mdi-map-marker" href="#">HIT-T SIEGE: AGOE, CARREFOUR DEUX LIONS</a></li>
                                    <li><a class="mdi mdi-phone" href="#">PHONE : (+228) 97 31 77 52 / 96 54 52 54</a></li>
                                    <li><a class="mdi mdi-email"  href="mailto:formationfacile.hitt.tg@gmail.com">EMAIL : formationfacile.hitt.tg@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>

<!--  -->    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/Logonew-removebg.png') }}" style="width: 70px" alt="logohit" />
                        </a>
                <!-- Search form -->
                    

                    </div>

                    <!-- Zone de recherche ajoutée ici -->

                <!-- Fin de la zone de recherche -->
                    <div class="main-menu">

                        <ul>

                            <li><a href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li class="about-menu">
                                <a href="#" class="mm-arr">Domaines</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="about-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay menu-about" href="{{ route('home') }}">
                                                        <img src="{{ asset('images/logosarl.png') }}" alt="">
                                                        <span>Academics</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mm1-com mm1-s2">
                                                <p>Vous voulez changer le monde? C’est exactement ce que nous faisons à HIT-T SARL-U. Lorsque vous rejoignez la communauté HIT-T, vous faites partie d’une institution qui change la conversation mondiale chaque jour.</p>
                                                <a href="frapropos" class="mm-r-m-btn">Apropos</a>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <ul>

                                                    <li><a href="frconsultation">Consultations</a></li>
                                                    <li><a href="boutique">E-Commerce</a></li>
                                                    <li><a href="#formation">Formations</a></li>
                                                    <li><a href="frservice">Services</a></li>

                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s4">
                                                <ul>
                                                    <li><a href="frlearning">Offres d'Emploi et Stages</a></li>
                                                    <li><a href="frimmobilier">Immobiliers</a></li>
                                                    <li><a href="frpublicite">Publicités</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="admi-menu">
                                <a href="#" class="mm-arr">Formations</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="frdomaine">
                                                        <img src="{{ asset('images/HIT-T_42.jpg') }}" alt="">
                                                        <span>Domaines (TRIT,SISG,TREB)</span>
                                                    </a>
                                                </div>
                                                <p>Explorez notre catalogue de formations variées dans des domaines tels que la technologie, le développement personnel, le marketing et bien plus encore.</p>
                                                <a href="frdomaine" class="mm-r-m-btn">Lire la suite</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="frfiliere">
                                                        <img src="{{ asset('images/HIT-T_7.png') }}" alt="">
                                                        <span style="font-weight: 100">Modulaire</span>
                                                    </a>
                                                </div>
                                                <p>Améliorez vos compétences professionnelles et élargissez vos horizons avec nos formations spécialisées, conçues pour répondre aux besoins du travail.</p>
                                                <a href="frfiliere" class="mm-r-m-btn">Lire la suite</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="frhistory">
                                                        <img src="{{ asset('images/HIT-T_40.png') }}" alt="">
                                                        <span>Programme & événements</span>
                                                    </a>
                                                </div>
                                                <p>Transformez votre carrière avec nos formations certifiées, reconnues par l'industrie, et obtenez les compétences dont vous avez besoin pour réussir.</p>
                                                <a href="frhistory" class="mm-r-m-btn">Lire la suite</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s4">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('etudiant') }}">
                                                        <img src="{{ asset('images/HIT-T_7.png') }}" alt="">

                                                        <span>Cours en ligne</span>
                                                    </a>
                                                </div>
                                                <p>Apprenez à votre rythme grâce à nos cours en ligne flexibles et engageants, conçus pour vous offrir une expérience d'apprentissage enrichissante.</p>
                                                <a href="frlearning" class="mm-r-m-btn">Lire la suite</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('etudiant') }}">Etudiant</a>
                            </li>



                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->


                           {{--  <li><a href="frcontacte">Contact</a> --}}

                            </li>


                            <li class="cour-menu">
                                <a href="#!" class="mm-arr">Pages</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Domaines</h4>
                                                <ul>
                                                    <li><a href="frservice">Services</a></li>
                                                    <li><a href="frformation">Formations</a></li>
                                                    <li><a href="frconsultation">E-Commerce</a></li>

                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Formations</h4>
                                                <ul>
                                                    <li><a href="frfiliere">Informatiques</a></li>
                                                    <li><a href="frhistory">Maintenance et reseaux</a></li>
                                                    <li><a href="frhistory">Developpement Mobile</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>E-commerces</h4>
                                                <ul>
                                                    <li><a href="frmaterielle">Boutiques des Livres</a></li>
                                                    <li><a href="frhabillement">Habillements et divers</a></li>
                                                    <li><a href="frboutique">Hôtels</a></li>
                                                    <li><a href="frpublicite">Publicités</a></li>

                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Emplois & stages</h4>
                                                <ul>
                                                    <li><a href="fremploie">Emplois</a></li>
                                                    <li><a href="frstage">Stages</a></li>
                                                    <li><a href="frfreelance">Freelance</a></li>
                                                    <li><a href="frcontacte">Contactez-nous</a></li>

                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Services</h4>
                                                <ul>
                                                    <li><a href="frlearning">Devis</a></li>
                                                    <li><a href="frimmobilier">Immobiliers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                            <a href="{{ route('faq') }}" class="mm-arr">FAQ</a>
                            </li>
                            <li>
                            <a href="{{ route('cart') }}" class="mm-arr"><span class="mdi mdi-cart " aria-hidden="true"> </span> Panier</a>
                            </li>
                        <div style="padding-left: 5px; margin-top: 12px" class="ed-com-t1-right">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @auth
                                            <span class="mr-2 d-none d-lg-inline text-gray-600">{{ Auth::user()->name }}</span>
                                            <img style="width: 20px" class="img-profile rounded-circle"
                                                 src="{{asset('admin/img/undraw_profile.svg')}}">
                                        @else
                                            <span class="mr-2 d-none d-lg-inline text-gray-600">Compte</span>
                                            <img style="width: 20px" class="img-profile rounded-circle"
                                                 src="{{asset('admin/img/undraw_profile.svg')}}">
                                        @endauth
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <div class="dropdown-divider"></div>
                                        @auth
                                            <a class="dropdown-item" href="{{ route('profile.update') }}">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Settings
                                            </a>
                                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                            <button style="width: 150px; color: rgb(0, 0, 0)" class="mdi mdi-sign-out btn dropdown-item" onclick="event.preventDefault();document.getElementById('logout').submit()">
                                                <i class="fas fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Déconnexion
                                            </button>
                                        @else
                                            <button class="dropdown-item">
                                                <a style="width: 150px" class="btn btn-outline-info" href="{{ route('login') }}">Connexion</a>
                                            </button>
                                            <button class="dropdown-item">
                                                <a style="width: 150px" class="btn btn-outline-primary" href="{{ route('register') }}">S'inscrire</a>
                                            </button>
                                        @endauth
                                    </div>
                                </div>
                            </div>



                        </ul>

                    </div>




            </div>
        </div>
    </div>
    {{-- <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="RECHERCHER COURS">
                                </div>

                                <div class="sf-list">
                                    <ul>
                                        <li><a href="course-details.html">DEVELOPPEMENT COMMERCIAL DE L’ENTREPRISE</a></li>
                                        <li><a href="course-details.html">GESTION DES RESSOURCES HUMAINES</a></li>
                                        <li><a href="course-details.html">GESTION ET DEVELOPPEMENT DE L’ENTREPRISE</a></li>
                                        <li><a href="course-details.html">Modulaires</a></li>
                                        <li><a href="course-details.html">Carte</a></li>
                                        <li><a href="course-details.html">Cours en ligne</a></li>

                                        <li><a href="course-details.html">FORMATIONS MODULAIRES TECHNOLOGIES / TECHNIQUES ET BÂTIMENT</a></li>
                                        <li><a href="course-details.html">FORMATIONS FILIERES TERTIAIRES</a></li>
                                        <li><a href="course-details.html">FORMATIONS MODULAIRES DOMAINES SISG, LANGUES ET TRADUCTION</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="RECHERCHER">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

</section>

