        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admindash') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-account"></i>
                </div>
                <div class="sidebar-brand-text mx-1">HIT ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admindash') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            {{-- produits --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Produits</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produits</h6>


                        <div class="collapse-divider">
                            <a class="collapse-item" href="#">Ajout des Produits</a>
                            <a class="collapse-item" href="#">Listes des Produits</a>
                        </div>

                    </div>
                </div>
            </li>
            {{-- formation --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Formations</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Formations</h6>


                        <div class="collapse-divider">
                            <a class="collapse-item" href="{{ route('create.formation') }}">Ajoute de Formations</a>
                             <a class="collapse-item" href="{{ route('listes.formation') }}">Listes des Formations</a>
                        </div>

                    </div>
                </div>
            </li>
            {{-- cours --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                    aria-expanded="true" aria-controls="collapseServices">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Services</span>
                </a>
                <div id="collapseServices" class="collapse" aria-labelledby="" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Services</h6>


                        <div class="collapse-divider">
                            <a class="collapse-item" href="{{ route('create.services') }}">Ajout de Services</a>
                             <a class="collapse-item" href="{{ route('listes.services') }}">Listes des Services</a>
                        </div>

                    </div>
                </div>
            </li>
            {{-- Domaines et Categories --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDomaines"
                    aria-expanded="true" aria-controls="collapseDomaines">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Domaines/Categories</span>
                </a>
                <div id="collapseDomaines" class="collapse" aria-labelledby="" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Domaines</h6>


                        <div class="collapse-divider">
                            <a class="collapse-item" href="{{ route('categories.create') }}">Ajout de Domaines</a>
                             <a class="collapse-item" href="{{ route('categories.index') }}">Listes des Domaines</a>
                        </div>

                    </div>
                </div>
            </li>
            {{-- etudiant --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseApprenants"
                    aria-expanded="true" aria-controls="collapseApprenants">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Listes des Apprenants</span>
                </a>
                <div id="collapseApprenants" class="collapse" aria-labelledby="" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Apprenants</h6>


                        <div class="collapse-divider">

                             <a class="collapse-item" href="{{ route('show.etudiant') }}">Listes des apprenants</a>
                        </div>

                    </div>
                </div>
            </li>
            {{-- slides --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlide"
                    aria-expanded="true" aria-controls="collapseSlide">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Slides</span>
                </a>
                <div id="collapseSlide" class="collapse" aria-labelledby="" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sliders</h6>


                        <div class="collapse-divider">
                            <a class="collapse-item" href="{{ route('slides.create') }}">Ajout des slides</a>
                             <a class="collapse-item" href="{{ route('slides.index') }}">Listes des slides</a>
                        </div>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="{{ route('cards') }}">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->
