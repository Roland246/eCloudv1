<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="Hostlar hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal hosting company and similar sites and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--title-->
    <title>Hostlar - Hosting Provider with WHMCS Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->
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
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo-color.png" width="120" alt="logo" class="img-fluid" /></a>
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
                                                        <h5 class="mb-3 h6">Service de stockage</h5>
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
                                                        <li><a class="nav-link sub-menu-nav-link" href="index.html">Home Default</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-image.html">Home Image</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-domain-search.html">Home Domain Search <span class="badge badge-danger ml-2">Hot</span></a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-domain-search-2.html">Home Domain Search Two</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-bg-image.html">Home Background Image</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-bg-video.html">Home Background Video</a></li>

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
                                                <a class="title-with-icon-link" href="shared-hosting.html">
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
                                                <a class="title-with-icon-link" href="dedicated-server-hosting.html">
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
                                                <a class="title-with-icon-link" href="cloud-hosting.html">
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
                                                <a class="title-with-icon-link" href="email-hosting.html">
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
                                                <a class="title-with-icon-link" href="shared-wp-hosting.html">
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
                                                <a class="title-with-icon-link" href="wp-hosting.html">
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
                                        <a class="title-with-icon-link" href="submit-request.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact </span>
                                                    <small class="u-header__promo-text">
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="support.html">
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
                                        <a class="title-with-icon-link" href="contact-us.html">
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
                                        <a class="title-with-icon-link" href="about-us.html">
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
                                <a class="btn primary-solid-btn animated-btn" href="{{ url('/home') }}" target="_blank">
                                    Mon espace
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

    <div class="main">
        <!--hero section start-->
        <section class="pt-100">
            <div class="feature-content-wrap">
                <div class="tab-content feature-tab-content">
                    <div class="tab-pane active" id="feature-tab-1">
                        <!--hero section start-->
                        <section class="hero-slider-section">
                            <div class="owl-carousel owl-theme hero-slider-one custom-dot dot-right-center">
                                <div class="item">
                                    <div class="gradient-overly-right hero-equal-height ptb-100" style="background: url('assets/img/hero-17.jpg')no-repeat center center / cover">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9 col-lg-8">
                                                    <div class="header-content text-white">
                                                        <div class="line"></div>
                                                        <h1 class="text-white">Dedicated Server with Hardware</h1>
                                                        <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                        <div class="action-btns mt-3">
                                                            <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                            <a href="#" class="btn outline-white-btn">Learn More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gradient-overly-right hero-equal-height ptb-100" style="background: url('assets/img/hero-10.jpg')no-repeat center center / cover">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9 col-lg-8">
                                                    <div class="header-content text-white">
                                                        <div class="line"></div>
                                                        <h1 class="text-white">Virtual Cloud Server Hosting</h1>
                                                        <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                        <div class="action-btns mt-3">
                                                            <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                            <a href="#" class="btn outline-white-btn">Learn More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gradient-overly-right hero-equal-height ptb-100" style="background: url('assets/img/hero-4.jpg')no-repeat center center / cover">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9 col-lg-8">
                                                    <div class="header-content text-white">
                                                        <div class="line"></div>
                                                        <h1 class="text-white">VPS Hosting</h1>
                                                        <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                        <div class="action-btns mt-3">
                                                            <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                            <a href="#" class="btn outline-white-btn">Learn More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--hero section end-->
                    </div>
                    <div class="tab-pane" id="feature-tab-2">
                        <!--hero section start-->
                        <section class="gradient-overly-right hero-equal-height ptb-100" style="background: url('assets/img/hero-5.jpg')no-repeat center center / cover">
                            <div class="container">
                                <div class="row">
                                    <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2">
                                        <div class="item">
                                            <div class="col-md-8 col-lg-7 col-12">
                                                <div class="header-content text-white">
                                                    <div class="line"></div>
                                                    <h1 class="text-white">Dedicated Server with Hardware</h1>
                                                    <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                    <div class="action-btns mt-3">
                                                        <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                        <a href="#" class="btn outline-white-btn">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-8 col-lg-7 col-12">
                                                <div class="header-content text-white">
                                                    <div class="line"></div>
                                                    <h1 class="text-white">Dedicated Server with Hardware</h1>
                                                    <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                    <div class="action-btns mt-3">
                                                        <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                        <a href="#" class="btn outline-white-btn">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-8 col-lg-7 col-12">
                                                <div class="header-content text-white">
                                                    <div class="line"></div>
                                                    <h1 class="text-white">Dedicated Server with Hardware</h1>
                                                    <p class="lead">Completely harness extensive testing procedures via ubiquitous processes. Globally envisioneer cross </p>
                                                    <div class="action-btns mt-3">
                                                        <a href="#" class="btn solid-white-btn mr-3">Check Prices</a>
                                                        <a href="#" class="btn outline-white-btn">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--hero section end-->
                    </div>
                </div>
            </div>
        </section>

        <!--hero section end-->

        <!--promo-section section start-->
        <section class="domain-search-cta-type ptb-100" style="background: url('assets/img/map-bg.png')no-repeat center center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="domain-search-content text-center mb-4">
                            <h2>Search Unique Domain!</h2>
                            <p>Get your perfect domain name starting from <strong>9.99$ </strong> for the first year and
                                free domain privacy included build.</p>
                        </div>
                        <div class="domain-search-wrap text-center">
                            <form action="domain-search-result.php" class="domain-search-form">
                                <div class="input-group shadow">
                                    <input type="text" name="domain" id="domain" class="form-control" placeholder="example.com" />
                                    <div class="input-group-append">
                                        <button class="btn search-btn btn-hover d-flex align-items-center" type="submit">
                                            <span class="ti-search mr-2"></span> Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="domain-list-wrap mt-4">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/com.png" alt="com" width="70" class="img-fluid" /> <span>$8.99</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/online.png" alt="com" width="70" class="img-fluid" /> <span>$0.99</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/net.png" alt="com" width="70" class="img-fluid" /> <span>$4.99</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/org.png" alt="com" width="70" class="img-fluid" /> <span>$2.99</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/store.png" alt="com" width="70" class="img-fluid" /> <span>$0.99</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--promo-section section end-->

        <!--services section start-->
        <section class="feature-promo-seciton ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Support and Commitment</h2>
                            <p class="lead">Globally seize extensive channels through go forward strategic theme areas.
                                Dramatically aggregate quality.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/customer-support.svg" alt="shared hosting" class="img-fluid mb-3" width="60">
                            <div class="service-plane-content">
                                <h3 class="h5">24/7/365 Support</h3>
                                <p>Day or night, rain or shine, anytime our team is here for you!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/credit-card.svg" alt="shared hosting" class="img-fluid mb-3" width="60">
                            <div class="service-plane-content">
                                <h3 class="h5">Secure Payment</h3>
                                <p>Intrinsicly evolve holistic processes without virtual process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/money-back.svg" alt="shared hosting" class="img-fluid mb-3" width="60">
                            <div class="service-plane-content">
                                <h3 class="h5">Money Back Guarantee</h3>
                                <p>We make sure you are served by person with the competency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--services section end-->

        <!--call to action section start-->
        <section class="start-transfer ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Easy to Start and Hassle free Transfer</h2>
                            <p class="lead">Get Immediate Activation or Express Transfer service free of charge.
                                Enthusiastically enhance testing procedures and cross.</p>
                        </div>
                    </div>
                </div>
                <div class="row start-website-box">
                    <div class="col-lg-6 col-12 pr-lg-0">
                        <div class="left-box white-bg">
                            <div class="d-flex align-items-center mb-4">
                                <span class="ti-vector icon-sm text-white primary-bg p-2 rounded mr-3"></span>
                                <h5 class="mb-0">Start a New Website <span
                                        class="badge color-1 color-1-bg">Easy to start</span></h5>
                            </div>
                            <ul>
                                <li>
                                    <strong>One-click App Marketplace</strong>
                                    <p>Over 450 Apps ready to be installed in seconds</p>
                                </li>
                                <li>
                                    <strong>The best DIY solution</strong>
                                    <p>20+ Frameworks and your favorite dev tools</p>
                                </li>
                                <li>
                                    <strong>Step by Step Tutorials</strong>
                                    <p>3000+ pages of tutorials to get you started</p>
                                </li>
                                <li>
                                    <strong>Unlimited 24/7 Priority Support</strong>
                                    <p>Always-free in-house technical support</p>
                                </li>
                            </ul>
                            <div class="btn-holder mt-4">
                                <a class="btn primary-solid-btn" href="#">Start now</a>
                            </div>
                            <p class="mt-3">
                                <small>Sign up today before <span class="text-blue" data-role="site-activation-timer"
                                                                  data-type="new">04:00 PM</span> and get Immediate Account
                                    Activation and Free Website Setup!
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pl-lg-0">
                        <div class="right-box primary-bg">
                            <div class="d-flex align-items-center mb-4">
                                <span class="ti-loop icon-sm color-primary white-bg p-2 rounded mr-3"></span>
                                <h5 class="mb-0 text-white">Express Transfer</h5>
                            </div>
                            <ul>
                                <li>
                                    <strong>People-powered site transfer</strong>
                                    <p>No messy automation - get it done by experts</p>
                                </li>
                                <li>
                                    <strong>No downtime, Fast and Painless</strong>
                                    <p>Express Transfer service included in all plans</p>
                                </li>
                                <li>
                                    <strong>Free Domain Transfer</strong>
                                    <p>Free one-year domain renewal after transfer</p>
                                </li>
                                <li>
                                    <strong>Free months of hosting</strong>
                                    <p>Up to six months unused time compensation</p>
                                </li>
                            </ul>
                            <div class="btn-holder mt-4">
                                <a class="btn solid-white-btn" href="#">Transfer Now</a>
                            </div>
                            <p class="mt-3">
                                <small>Sign up now and get your website transferred by <span class="text-yellow"
                                                                                             data-role="site-activation-timer"
                                                                                             data-type="transfer">04:57 PM</span>
                                    today with free Express Transfer!
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--call to action section end-->

        <!--pricing with switch section start-->
        <section class="our-services ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                            <h2>We Have a Hosting Solution For You</h2>
                            <p class="lead">Synergistically architect plug-and-play without next-generation
                                manufactured products. Assertively develop synergistic networks.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-shared-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Shared Hosting</h3>
                                <p>Our most popular product! Shared Web Hosting gives you a fast SSD
                                    storage hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-wordpress-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WordPress Hosting</h3>
                                <p>Get up and running fast with Optimized performance easy
                                    maintenance hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">VPS Hosting</h3>
                                <p>Virtual Private Servers with ultra-fast SSDs and flexibility, Ubuntu, IPv6,
                                    Nginx and more.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$12.00/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-website-builder.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WP Website Builder</h3>
                                <p>No code required! Build your site confidently with design tools that WordPress
                                    website build.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-website-builder.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WP Website Builder</h3>
                                <p>No code required! Build your site confidently with design tools that WordPress
                                    website build.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-dadicate-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Dedicated Hosting</h3>
                                <p>Fast web servers to run your applications with root and a 100% Guarantee
                                    our hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$145.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" >
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-cloud-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Cloud Hosting</h3>
                                <p>Lightning-fast servers with root access, SSD storage and blazing-fast networking hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$0.0059/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--pricing with switch section end-->
        

        <!--feature section start-->
        <section class="hero-equal-height ptb-100 gradient-overly-top" style="background: url('assets/img/offer-bg-3.png')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-wrap text-white position-relative">
                            <span class="text-white h5 font-weight-normal">Reliable hosting to make any website</span>
                            <h1 class="text-white">We Offer Shared Hosting Easy To Manage</h1>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="fas fa-check-circle text-white mr-2"></span><strong>Unmetered</strong> Sub Domains, Accounts</li>
                                <li class="py-1"><span class="fas fa-check-circle text-white mr-2"></span><strong>99%</strong> Uptime Guarantee</li>
                                <li class="py-1"><span class="fas fa-check-circle text-white mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                            </ul>
                            <div class="action-btns mt-2">
                                <p>Get all the essentials features <strong>Starting at $2.59/mo</strong></p>
                                <a href="#" class="btn outline-white-btn mt-2">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="offer-tag-wrap mt-4 mt-sm-4 mt-md-0 mt-lg-0">
                            <div class="position-relative">
                                <img src="assets/img/offer-tag-bg.svg" alt="offer tag" class="img-fluid">
                            </div>
                            <div class="offer-tag text-center">
                                <div class="ribbon-2">
                                    <span>Shared Hosting</span>
                                </div>
                                <div class="offer-price-tag">
                                    <span>$</span>0.99<small>/Mo</small>
                                    <p class="lead mb-0">Limited Time Offer!</p>
                                </div>
                                <a href="offer-single-page.html" class="btn outline-white-btn mt-4">Save Now <i class="fas fa-arrow-alt-circle-right pl-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--feature section end-->

        <!--call to action section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Temoignages de nos clients</h2>
                            <p class="lead">Authoritatively reinvent client-centric e-markets via fully tested process
                                improvements. Objectively restore strategic initiatives through fully researched.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5 my-3">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Support !</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively
                                    maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Dari</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5 my-3">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Support !</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively
                                    maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Dari</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5 my-3">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Support !</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively
                                    maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Dari</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
            </div>
        </section>

        <section class="pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Different Call to Action Style</h2>
                            <p class="lead">Intrinsicly innovate enterprise partnerships through cutting-edge platforms. Distinctively incubate distinctive data without top-line processes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-content-wrap">
                
              
                  
                   
                 
                        <!--call to action inline start-->
                        <section class="call-to-action ptb-100 gradient-overlay" style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-12 col-lg-8">
                                        <div class="call-to-action-content text-white">
                                            <h2 class="text-white">Need Some Help?</h2>
                                            <p>Whether you’re stuck or just want some tips on where to start, hit up our experts anytime.
                                                <br> Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                                <strong> 5:30AM–9:30PM PT</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="action-btns mt-md-4 text-lg-right text-md-right text-sm-left">
                                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--call to action inline end-->
                   
                    
            
            </div>
        </section>


        <section class="submit-request-form ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Submit Your Request</h2>
                            <p class="lead">Synergistically impact innovative imperatives after magnetic bandwidth.
                                Collaboratively generate sustainable customer service without.</p>
                                @if ($message = Session::get('success'))
                                    {{$message}} 
                                @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <form action="{{route('contact.store', null, false)}}" method="POST"  class="submit-request-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="select1">Hi, what can we help you with?</label>
                                        <select id="select1" name="categorie" old={{'categorie'}} class="crumina--select input--squared select2-hidden-accessible form-control" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                                            <option data-display="Domain Registrations">Domain Registrations</option>
                                            <option value="1">Getting Started</option>
                                            <option value="2">Hosting</option>
                                            <option value="3">Domain Registrations</option>
                                            <option value="4">General</option>
                                        </select>
                                        @error('categorie')
                                            {{$errors->first('categorie')}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name <span class="required">*</span></label>
                                        <input id="name" name="name" old="{{'name'}}"  class="form-control" type="text" placeholder="Your Name">
                                        @error('name')
                                            {{$errors->first('name')}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Your Website Link</label>
                                        <input id="url" name="website_link" old="{{'website_link'}}"  class="form-control" type="text" placeholder="https://">
                                        @error('website_link')
                                            {{$errors->first('website_link')}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="select2">Tell us more <span class="required">*</span></label>
                                        <select id="select2" name="more_information" old="{{'more_information'}}" class="form-control" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                                            <option data-display="Domain Registrations">What if my domain registration
                                                expires?
                                            </option>
                                            <option value="1">Getting Started</option>
                                            <option value="2">Hosting</option>
                                            <option value="3">Domain Registrations</option>
                                            <option value="4">General</option>
                                        </select>
                                        @error('more_information')
                                            {{$errors->first('more_information')}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="submitEmail">Your email <span class="required">*</span></label>
                                        <input id="submitEmail" name="email" old="{{'email'}}"  class="form-control" type="email" placeholder="Email Address">
                                        @error('email')
                                            {{$errors->first('email')}}
                                        @enderror
                                    </div>
                                    <div class="form-group input-file-wrap">
                                        <label for="upfile">Attachments</label>
                                        <span class="upfile-btn">Upload your file</span>
                                        <input id="upfile"  name="file" old="{{'file'}}"  type="file" class="form-control" />
                                        @error('file')
                                            {{$errors->first('file')}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="descr">Provide a detailed description <span
                                                class="required">*</span></label>
                                        <textarea id="descr" name="description" old="{{'description'}}"  class="form-control" placeholder="How can we help you?" rows="4"></textarea>
                                        <p class="small mt-2">Please enter the details of your request. A member of our
                                            support staff will respond as soon as possible.</p>
                                    </div>
                                    @error('description')
                                        {{$errors->first('description')}}
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn primary-solid-btn">SUBMIT A REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action section end-->

        <!--faq section start-->
       


        <!--faq section end-->

        <!--testimonial and review section start-->
    
        <!--testimonial and review section end-->


    </div>

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row footer-top-wrap">
                            <div class="col-12">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SECURED BY</h4>
                                    <ul class="list-inline security-icon-list">
                                        <li class="list-inline-item"><img src="assets/img/mcafee-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/norton-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/accredited-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/secured-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row footer-top-wrap">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">PRODUCTS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">WordPress Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shared Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Virtual Private Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dedicated Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Domain Names</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Affiliates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Careers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Community</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEGAL</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Legal Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Report Abuse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">WHOIS Lookup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SUPPORT</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Knowledge Base</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Forums</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">System Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Support Team</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg py-3">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2021. All
                            rights reserved by
                            <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                        </p>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="payment-method text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-amex.svg" alt="amex" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-visa.svg" alt="visa" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-mastercard.svg" alt="mastercard" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-paypal.svg" alt="paypal" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-bitcoin.svg" alt="bitcoin" width="50" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->
    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-rocket"></span>
    </button>
    <!--bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>