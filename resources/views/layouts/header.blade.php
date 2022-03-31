<!--header section start-->
<header id="header" class="header-main">
    <!--topbar start-->
    <div id="header-top-bar" class="gray-light-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-7">
                    <div class="topbar-text d-none d-md-block d-lg-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="tell:888-1234567"><span class="fas fa-phone mr-2"></span> 24x7 Technical Support 888-1234567</a>
                            </li>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-comments mr-2"></span> Live
                                    Chat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text">
                    @if (Route::has('login'))
                        <ul class="list-inline text-right">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">home</a>
                        @else
                            <li class="list-inline-item"><a href="{{ route('login') }}"><span class="fas fa-user mr-2"></span> Connexion</a></li>
                            @if (Route::has('register'))
                            <li class="list-inline-item"><a href="{{ route('register') }}"><span class="fas fa-lock mr-2"></span> S'enregistrer</a>
                            @endif
                            </li>

                            @endif
                            <li class="fas fa-shopping-cart"></li>
                        </ul>
                    @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->

    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                <!--logo start-->
                <a class="navbar-brand" href="{{ url('/home') }}"><img src="assets/img/logo-color.png" width="120" alt="logo" class="img-fluid" /></a>
                <!--logo end-->

                <!--responsive toggle button start-->
                <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                    <span id="hamburgerTrigger">
                      <span class="fas fa-bars"></span>
                    </span>
                </button>
                <!--responsive toggle button end-->

                <!--main menu start-->
                <div id="navBar" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto main-navbar-nav">
                        <!--home start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                            <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">Accueil</a>

                            <!--home mega menu start-->
                            <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="homeMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-lg-5">
                                        <!-- Banner Image -->
                                        <div class="menu-banner-wrap d-none d-md-none d-lg-block gray-light-bg">
                                            <div class="menu-banner-content">
                                                <div class="mb-4">
                                                    <h5 class="mb-3 h6"> de stockage</h5>
                                                    <ul class="list-unstyled tech-feature-list">
                                                        <li class="py-1"><span class="ti-control-forward mr-2"></span>PROTÉGER, PARTAGER ET ORGANISER LES DONNÉES DE VOTRE ENTREPRISE SONT DES MISSIONS CRITIQUES</li>
                                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>NOTRE SOLUTION DE PARTAGE ET DE SYNCHRONISATION DE FICHIERS VOUS APPORTE UNE RÉPONSE</strong></li>
                                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>COMPLÈTE ET SÉCURISÉE</strong> </li>
                                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>99%</strong> Garantie</li>
                                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>45-Jours</strong> de tests gratuits</li>
                                                    </ul>
                                                </div>
                                                <a class="btn primary-solid-btn" href="#">Savoir plus <span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                            </div>
                                        </div>
                                        <!-- End Banner Image -->
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="row mega-menu-wrap">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <span class="sub-menu-title">Home Demos</span>
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link" href="/">Home Default</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="#">Home Image</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="#">Home Domain Search <span class="badge badge-danger ml-2">Hot</span></a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="#">Home Domain Search Two</a>
                                                    </li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="#">Home Background Image</a>
                                                    </li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="#">Home Background Video</a></li>

                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--home mega menu end-->
                        </li>
                        <!--home end-->

                        <!--pages start-->

                        <!--pages end-->


                        <!--hosting start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                            <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Services</a>

                            <!-- Demos - Mega Menu -->
                            <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Serveur Privé Virtuel</span>
                                                        <small class="u-header__promo-text">Innovate reliable quality
                                                            Starting at <strong>$2.99</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="{{ route('stockage.index') }}">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-box"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Service de stockage<span
                                                                class="badge badge-success ml-1">Popular</span></span>
                                                        <small class="u-header__promo-text">Pefficiently maintain
                                                            Starting at <strong>$11.99</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Hébergement d’applications </span>
                                                        <small class="u-header__promo-text">Quickly build Starting at
                                                            <strong>$150.99/mo</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Service de sécurité de solutions informatiques <span
                                                                class="badge badge-danger ml-1">Hot</span></span>
                                                        <small class="u-header__promo-text">Conveniently cloud Starting
                                                            at <strong>$5.99/mo</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                    </div>

                                    <div class="col-md-6">
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-envelope"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Développement de Sites Web</span>
                                                        <small class="u-header__promo-text">First Starting at <strong>$0.99/mo
                                                            per mailbox</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fas fa-database"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Installation de logiciels</span>
                                                        <small class="u-header__promo-text">Conveniently Starting at
                                                            <strong>$9.99/mo</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media">
                                                    <div class="menu-item-icon"><i class="fab fa-wordpress"></i></div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Gestion de projets cloud</span>
                                                        <small class="u-header__promo-text">Conveniently Starting at
                                                            <strong>$9.99/mo</strong></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->

                                        <!--menu title with subtitle and icon item end-->
                                    </div>

                                </div>
                            </div>
                            <!-- End Demos - Mega Menu -->
                        </li>
                        <!--hosting end-->

                        <!--elements start-->

                        <!--elements end-->

                        <!--support start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                            <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Support</a>
                            <!--support submenu start-->
                            <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu" style="min-width: 330px;">

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{Route('help')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="assets/img/chat.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Help</span>
                                                <small class="u-header__promo-text">
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="#">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="assets/img/support.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Ouvrir un ticket</span>
                                                <small class="u-header__promo-text"></small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->
                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->
                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->

                                <!--submenu footer start-->

                                <!--submenu footer end-->
                            </div>
                            <!--support submenu end-->
                        </li>
                        <!--support end-->

                        <!--about start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px" data-position="right">
                            <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Documentation</a>

                            <!--about submenu start-->
                            <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu" style="min-width: 330px;">

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{Route('faq')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Foire aux questions (FAQ)</span>
                                                <small class="u-header__promo-text">
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{Route('guide')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Guides utilisateurs</span>
                                                <small class="u-header__promo-text">
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->

                                <!--menu title with subtitle and icon item end-->

                                <!--submenu footer start-->
                                <div class="u-header__promo-footer pb-0">
                                    <!-- List -->
                                    <div class="row no-gutters align-bottom">
                                        <div class="col-9">
                                            <div class="u-header__promo-footer-item">
                                                <span class="u-header__promo-title">CEO Video Message</span>
                                                <p class="small d-inline-flex">Credibly synergize unique... <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon"><span
                                                        class="ti-control-play"></span> </a></p>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex align-bottom">
                                                <img src="assets/img/ceo.png" width="300" alt="ceo" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End List -->
                                </div>
                                <!--submenu footer end-->
                            </div>
                            <!--about submenu end-->
                        </li>
                        <!--about end-->

                        <!--button start-->
                        <li class="nav-item header-nav-last-item d-flex align-items-center">
                            <a class="btn primary-solid-btn animated-btn" href="{{ url('logout') }}">
                                Déconnexion
                            </a>
                        </li>
                        <!--button end-->
                    </ul>
                </div>
                <!--main menu end-->
            </nav>
        </div>
    </div>
    <!--main header menu end-->
</header>
<!--header section end-->
