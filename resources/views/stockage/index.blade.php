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
                            <a href="{{ route('home') }}" class="text-sm text-gray-700 underline">home</a>
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
                                                    <a class="btn primary-solid-btn" href="#    ">Savoir plus <span
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
                                                <a class="title-with-icon-link" href="{{ route('new.commande') }}">
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
<!--hero section end-->

<!--pricing section start-->
<!--client section start-->
<section class="typography-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Typography Content</h2>
                            <p class="lead">
                                Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                                e-business. Conveniently innovate compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="typography-wrap">
                            <h1>h1. Bootstrap heading</h1>
                            <h2>h2. Bootstrap heading</h2>
                            <h3>h3. Bootstrap heading</h3>
                            <h4>h4. Bootstrap heading</h4>
                            <h5>h5. Bootstrap heading</h5>
                            <h6>h6. Bootstrap heading</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="typography-wrap">
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="paragraph-wrap">
                            <h5>Paragraph</h5>
                            <p>Objectively disseminate low-risk high-yield quality vectors for world-class functionalities. Authoritatively network fully tested customer service via revolutionary models. Compellingly repurpose robust catalysts for change via stand-alone leadership skills. Conveniently harness enabled users whereas 24/7 internal or "organic" sources. Competently conceptualize customized innovation after market positioning channels.</p>

                            <p>Synergistically deploy fully tested meta-services without competitive web services. Intrinsicly deploy stand-alone ROI before emerging partnerships. Completely generate diverse. Competently redefine adaptive services through bricks-and-clicks synergy. </p>
                            <h5>Lead Paragraph</h5>
                            <p class="lead">
                                Synergistically redefine resource-leveling bandwidth rather than tactical value. Completely matrix cutting-edge architectures vis-a-vis cross-platform web-readiness.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="paragraph-wrap post-content mt-4">
                            <h5>Blockquote</h5>
                            <blockquote class="blockquote">
                                <p>Progressively architect sustainable initiatives after real-time collaboration and idea-sharing. Holisticly productivate world-class human capital after fully tested information. Credibly e-enable tactical total linkage.</p>
                                <footer class="blockquote-footer">Amanda Pollock, Google Inc.</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--client section start-->
<!--pricing section end-->

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

<!--technical specifications start-->
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
                    <div class="col-md-6 col-lg-4">
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
<!--technical specifications end-->

<!--call to action section start-->
<section id="features" class="feature-tab-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-content-wrap">
                            <ul class="nav nav-tabs feature-tab border-bottom-0 mb-5" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gray-light-bg active" href="#tab6-1" data-toggle="tab">
                                        <img src="assets/img/icon-wordpress-hosting.svg" width="35" alt="wp hosting" class="mr-2" />
                                        <h6 class="mb-0">Wordpress Hosting</h6>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gray-light-bg" href="#tab6-2" data-toggle="tab">
                                        <img src="assets/img/icon-dadicate-hosting.svg" width="35" alt="wp hosting" class="mr-2" />
                                        <h6 class="mb-0">Dedicated Hosting</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gray-light-bg" href="#tab6-3" data-toggle="tab">
                                        <img src="assets/img/icon-shared-hosting.svg" width="35" alt="wp hosting" class="mr-2" />
                                        <h6 class="mb-0">Shared Hosting</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="tab6-1">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                            <div class="image-box fadein text-xl-right text-center">
                                                <img src="assets/img/icon-wordpress-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                            <h3>Better support for your wordpress website</h3>
                                            <p>Progressively matrix mission-critical core competencies without magnetic
                                                paradigms. Appropriately develop flexible ROI without goal-oriented customer
                                                service. Seamlessly.</p>
                                            <div class="row pt-2">
                                                <div class="col-md-6 col-12">
                                                    <h5>WordPress Optimization</h5>
                                                    <ul class="disc-style">
                                                        <li>Latest and Fastest PHP/MySQL version</li>
                                                        <li>SSD-only cloud with guaranteed CPU</li>
                                                        <li>HTTP/2 and free CloudFlare CDN</li>
                                                        <li>Observer Resource Monitoring</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h5>Extra RocketBooster</h5>
                                                    <ul class="disc-style">
                                                        <li>Varnish Static and Dynamic caching</li>
                                                        <li>LiteSpeed LSPHP Technology</li>
                                                        <li>Opcode Caching</li>
                                                        <li>Optimized static content processing</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="action-btns mt-4">
                                                <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                                <a href="#" class="btn outline-btn">Pricing Plans</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6-2">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                            <div class="image-box fadein text-xl-right text-center">
                                                <img src="assets/img/icon-dadicate-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                            <h3>Resource monitoring that actually matters</h3>
                                            <p>Completely streamline magnetic collaboration and idea-sharing with market
                                                positioning portals. Objectively pontificate intuitive value whereas
                                                client-centered deliverables.</p>
                                            <div class="row pt-2">
                                                <div class="col-md-6 col-12">
                                                    <h5>Website Monitoring</h5>
                                                    <p>See exactly how much resources your website is using to optimize
                                                        performance and reduce cost scenarios pandemic mindshare.</p>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h5>Optimization Reports</h5>
                                                    <p>Daily reports with detailed statistics and optimization tips to
                                                        improve Rapidiously orchestrate multimedia based.</p>
                                                </div>
                                            </div>
                                            <div class="action-btns mt-4">
                                                <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                                <a href="#" class="btn outline-btn">Pricing Plans</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6-3">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                            <div class="image-box fadein text-xl-right text-center">
                                                <img src="assets/img/icon-shared-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                            <h3>Better wordpress security</h3>
                                            <p>Efficiently reintermediate long-term high-impact channels without equity
                                                invested technology. Quickly brand backend web-readiness without
                                                cross-platform e-services.</p>
                                            <div class="row pt-2">
                                                <div class="col-md-6 col-12">
                                                    <h5>Exclusive Features</h5>
                                                    <ul class="disc-style">
                                                        <li>Daily Backups & free backup restore</li>
                                                        <li>Security Updates and Patching</li>
                                                        <li>Performance and resource monitoring</li>
                                                        <li>Step-by-step Tutorials & Knowledgebase</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h5>WordPress Services</h5>
                                                    <ul class="disc-style">
                                                        <li>1-click WordPress Installation</li>
                                                        <li>Free WordPress Transfer</li>
                                                        <li>Themes and plugins installation</li>
                                                        <li>Malware Scan & Reports</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="action-btns mt-4">
                                                <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                                <a href="#" class="btn outline-btn">Pricing Plans</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--call to action section end-->

<!--start and transfer section start-->
<!--faq section start-->
<section class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize
                                frictionless expertise whereas tactical relationships. Still have questions? <a href="#contact" class="page-scroll">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion-one" class="accordion accordion-faq">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">What is Web Hosting?
                                    </h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">What Are the
                                        Different Types of Web Hosting Products DreamHost Offers?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block">How Do I Buy a Domain
                                        Name?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Can You Help Me
                                        Understand More About WordPress?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->
<!--start and transfer section end-->

<!--network map section start-->
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
                        <div class="action-btns mt-md-4 text-md-right text-lg-right text-sm-left">
                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--network map section end-->

<!--testimonial and review section start-->
<section class="submit-request-form ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Submit Your Request</h2>
                            <p class="lead">Synergistically impact innovative imperatives after magnetic bandwidth.
                                Collaboratively generate sustainable customer service without.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <form class="submit-request-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="select1">Hi, what can we help you with?</label>
                                        <select id="select1" class="crumina--select input--squared select2-hidden-accessible form-control" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                                            <option data-display="Domain Registrations">Domain Registrations</option>
                                            <option value="1">Getting Started</option>
                                            <option value="2">Hosting</option>
                                            <option value="3">Domain Registrations</option>
                                            <option value="4">General</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name <span class="required">*</span></label>
                                        <input id="name" class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Your Website Link</label>
                                        <input id="url" class="form-control" type="text" placeholder="https://">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="select2">Tell us more <span class="required">*</span></label>
                                        <select id="select2" class="form-control" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                                            <option data-display="Domain Registrations">What if my domain registration
                                                expires?
                                            </option>
                                            <option value="1">Getting Started</option>
                                            <option value="2">Hosting</option>
                                            <option value="3">Domain Registrations</option>
                                            <option value="4">General</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="submitEmail">Your email <span class="required">*</span></label>
                                        <input id="submitEmail" class="form-control" type="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group input-file-wrap">
                                        <label for="upfile">Attachments</label>
                                        <span class="upfile-btn">Upload your file</span>
                                        <input id="upfile" type="file" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="descr">Provide a detailed description <span
                                                class="required">*</span></label>
                                        <textarea id="descr" class="form-control" placeholder="How can we help you?" rows="4"></textarea>
                                        <p class="small mt-2">Please enter the details of your request. A member of our
                                            support staff will respond as soon as possible.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="button" class="btn primary-solid-btn">SUBMIT A REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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