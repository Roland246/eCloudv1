<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- SEO Meta description -->
    <meta
      name="description"
      content="Hostlar hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal hosting company and similar sites and many more."
    />
    <meta name="author" content="ThemeTags" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link
      rel="icon"
      href="assets/img/favicon.png"
      type="image/png"
      sizes="16x16"
    />

    <!--google fonts-->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!--title-->
    <title>VPS Hosting - Hosting Provider with WHMCS Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/css/custom.css" />
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
                                        <a class="title-with-icon-link" href="{{url('help')}}">
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
                                        <a class="title-with-icon-link" href="{{url('faq')}}">
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
                                        <a class="title-with-icon-link" href="{{url('guide')}}">
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
    <!--header section end-->

    <div class="main">
      <!--hero section start-->
      <section
        class="hero-equal-height pt-165 pb-100 gradient-overlay"
        style="
          background: url('assets/img/hero-1.jpg') no-repeat center center /
            cover;
        "
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
              <div
                class="
                  hero-content-wrap
                  text-white text-center
                  position-relative
                  z-index
                "
              >
                <h1 class="text-white">Managed Your VPS Servers</h1>
                <p class="lead">
                  Interactively seize pandemic human capital before web-enabled
                  systems. Dramatically architect web-enabled applications and
                  distinctive e-services.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--hero section end-->

      <!--custom plan section start-->
      <section id="custom-plan" class="custom-plan gray-light-bg pt-5 mt--165">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="custom-plan-box white-bg custom-shadow">
                <input
                  id="c-plan"
                  type="text"
                  data-slider-min="1"
                  data-slider-max="12"
                  data-slider-step="1"
                  data-slider-value="6"
                  data-currency="$"
                  data-unit=""
                />

                <ul class="list-inline mt-5 custom-vps-list text-center">
                  <li class="list-inline-item">
                    <div class="single-vps-item rounded text-center">
                      <span
                        class="ti-shield icon-sm color-primary p-2 mb-3"
                      ></span>
                      <h6 class="d-block py-1">Core</h6>
                      <h5 class="mb-0 feature vpsCore h5"><span>1</span> GB</h5>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="single-vps-item rounded text-center">
                      <span
                        class="ti-plug icon-sm color-primary p-2 mb-3"
                      ></span>
                      <h6 class="d-block py-1">Memory</h6>
                      <h5 class="mb-0 feature vpsMemory"><span>2</span> GB</h5>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="single-vps-item rounded text-center">
                      <span
                        class="ti-harddrive icon-sm color-primary p-2 mb-3"
                      ></span>
                      <h6 class="d-block py-1">Storage</h6>
                      <h5 class="mb-0 feature vpsStorage">
                        <span>10</span> GB
                      </h5>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="single-vps-item rounded text-center">
                      <span
                        class="ti-dashboard icon-sm color-primary p-2 mb-3"
                      ></span>
                      <h6 class="d-block py-1">Bandwidth</h6>
                      <h5 class="mb-0 feature vpsBandwidth">
                        <span>1000</span> GB
                      </h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="custom-plan-info-box p-5 white-bg custom-shadow">
                <h5>Order Summary</h5>
                <p>Flexible hosting platform to deploy your online projects.</p>
                <div class="price vpsPrice">$20</div>
                <div class="btn-holder">
                  <a href="#" class="btn primary-solid-btn vpsWHmcsUrl"
                    >Order now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--custom plan section end-->

      <!--vps hosting pricing plane start-->
      <section class="vps-pricing-plane ptb-100 gray-light-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
              <div class="section-heading text-center mb-5">
                <h2>VPS Hosting Pricing Plane</h2>
                <p class="lead">
                  Uniquely restore open-source products via open-source
                  relationships. Enthusiastically deliver competitive systems
                  and client-centric.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <table class="table vps-hosting-pricing-table">
                <thead>
                  <tr>
                    <th>VCPU</th>
                    <th>Memory</th>
                    <th>CPU Power</th>
                    <th>Storage</th>
                    <th>Geekbench Score</th>
                    <th>Bandwidth</th>
                    <th colspan="2">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="vps-pricing-row border-accent-primary">
                    <td data-value="VCPU">1 vCPU</td>
                    <td data-value="Memory">2GB</td>
                    <td data-value="CPU Power">
                      <span>2.4GHz<span class="cpu-core">1 core</span></span>
                    </td>
                    <td data-value="Storage">20GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">3513</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 30%"
                            aria-valuenow="30"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            30%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">1000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$3.95<span>/month</span></span>
                        <span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-3 color-3-bg"
                            >Save 30%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                  <tr class="vps-pricing-row border-red-themes">
                    <td data-value="VCPU">2 vCPU</td>
                    <td data-value="Memory">4GB</td>
                    <td data-value="CPU Power">
                      <span>4.8GHz<span class="cpu-core">2 cores</span></span>
                    </td>
                    <td data-value="Storage">40GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">5363</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 40%"
                            aria-valuenow="45"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            40%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">2000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$8.95<span>/month</span></span>
                        <span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-1 color-1-bg"
                            >Save 50%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                  <tr class="vps-pricing-row border-orange-themes">
                    <td data-value="VCPU">3 vCPU</td>
                    <td data-value="Memory">6GB</td>
                    <td data-value="CPU Power">
                      <span>7.2GHz<span class="cpu-core">3 cores</span></span>
                    </td>
                    <td data-value="Storage">60GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">7545</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 60%"
                            aria-valuenow="60"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            60%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">3000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$12.95<span>/month</span></span>
                        <span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-3 color-3-bg"
                            >Save 10%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                  <tr class="vps-pricing-row border-yellow-themes">
                    <td data-value="VCPU">4 vCPU</td>
                    <td data-value="Memory">8GB</td>
                    <td data-value="CPU Power">
                      <span>9.6GHz<span class="cpu-core">4 cores</span></span>
                    </td>
                    <td data-value="Storage">80GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">8953</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 75%"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            75%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">4000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$15.95<span>/month</span></span
                        ><span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-3 color-3-bg"
                            >Save 30%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                  <tr class="vps-pricing-row border-blue-themes">
                    <td data-value="VCPU">6 vCPU</td>
                    <td data-value="Memory">12GB</td>
                    <td data-value="CPU Power">
                      <span>14.4GHz<span class="cpu-core">6 cores</span></span>
                    </td>
                    <td data-value="Storage">120GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">10789</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 85%"
                            aria-valuenow="85"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            85%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">6000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$23.95<span>/month</span></span
                        ><span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-5 color-5-bg"
                            >Save 40%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                  <tr class="vps-pricing-row border-lime-themes">
                    <td data-value="VCPU">8 vCPU</td>
                    <td data-value="Memory">16GB</td>
                    <td data-value="CPU Power">
                      <span>19.2GHz<span class="cpu-core">8 cores</span></span>
                    </td>
                    <td data-value="Storage">160GB</td>
                    <td data-value="Geekbench Score">
                      <div class="score-bar-wrap">
                        <span class="geekbench-score">12632</span>
                        <div class="progress w-100 score-bar-item">
                          <div
                            class="progress-bar primary-bg"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            100%
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-value="Bandwidth">8000GB</td>
                    <td data-value="Price">
                      <p>
                        <span class="rate">$29.95<span>/month</span></span
                        ><span class="pricing-onsale"
                          >On sale -
                          <span class="badge color-3 color-3-bg"
                            >Save 10%</span
                          ></span
                        >
                      </p>
                    </td>
                    <td>
                      <a href="" class="btn primary-solid-btn">Order Now</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row justify-content-center d-none d-md-block d-lg-block">
            <div class="col-md-10 col-lg-12">
              <div class="payment-method text-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-amex.svg"
                      alt="amex"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-visa.svg"
                      alt="visa"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-mastercard.svg"
                      alt="mastercard"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-paypal.svg"
                      alt="paypal"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-bitcoin.svg"
                      alt="bitcoin"
                      width="50"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--vps hosting pricing plane end-->

      <!--feature section start-->
      <section class="feature-section ptb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
              <div class="section-heading text-center mb-5">
                <h2>Hosting Platform Features</h2>
                <p class="lead">
                  These features come standard in all of our hosting plans.
                  Dynamically extend imperatives through open-source quickly
                  niche markets.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span
                  class="ti-harddrives icon-sm d-block color-primary mb-3"
                ></span>
                <h5 class="mb-2">SSD Disk Drives</h5>
                <p>
                  You can never go wrong with our own top-notch dedicated
                  servers loaded
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span
                  class="ti-rss-alt icon-sm d-block color-primary mb-3"
                ></span>
                <h5 class="mb-2">100 Mb/s Network</h5>
                <p>
                  We can guarantee an excellent experience and loading time for
                  your successful
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span class="ti-lock icon-sm d-block color-primary mb-3"></span>
                <h5 class="mb-2">DDoS Protection</h5>
                <p>
                  With full root access you will be able to take full control of
                  your server very easy
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span
                  class="ti-world icon-sm d-block color-primary mb-3"
                ></span>
                <h5 class="mb-2">Dedicated IP</h5>
                <p>
                  One of many premium features is a dedicated IP cheapest VPS
                  hosting plan
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span
                  class="ti-location-pin icon-sm d-block color-primary mb-3"
                ></span>
                <h5 class="mb-2">IPv6 Support</h5>
                <p>
                  Our VPS hosting plan is fully packed with dedicated IPv6
                  Internet protocol IP
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-feature-list p-4 text-center">
                <span
                  class="ti-wallet icon-sm d-block color-primary mb-3"
                ></span>
                <h5 class="mb-2">Money-back Guarantee</h5>
                <p>
                  If you’re not 100% satisfied with Hostlar, we’ll refund your
                  payment no risk
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--feature section end-->

      <!--call to action new section start-->
      <section
        class="call-to-action ptb-100 gradient-overlay"
        style="
          background: url('assets/img/hero-bg-4.jpg') no-repeat center center /
            cover;
        "
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
              <div class="cta-new-wrap text-white text-center">
                <h2 class="text-white">30-day Money-back Guarantee</h2>
                <p class="lead">
                  Globally parallel task granular alignments through excellent
                  intellectual capital. Globally deploy vertical leadership.
                </p>
                <div class="action-btns mt-4">
                  <a href="#" class="btn solid-white-btn animated-btn mr-lg-3"
                    >Get Started Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--call to action new section end-->

      <!--faq section start-->
      <div id="faq" class="ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8">
              <div class="section-heading mb-5">
                <h2>Frequently Asked Queries</h2>
                <p>
                  Efficiently productivate reliable paradigms before ubiquitous
                  models. Continually utilize frictionless expertise whereas
                  tactical relationships. Still have questions?
                  <a href="#contact" class="page-scroll">Contact us</a>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div id="accordion-one" class="accordion accordion-faq">
                <div class="card mb-0">
                  <a
                    class="card-header collapsed"
                    data-toggle="collapse"
                    href="#collapseOne"
                  >
                    <h6 class="mb-0 d-inline-block">What is Web Hosting?</h6>
                  </a>
                  <div
                    id="collapseOne"
                    class="collapse"
                    data-parent="#accordion-one"
                  >
                    <div class="card-body">
                      <p>
                        Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan
                        excepteur butcher vice lomo. Leggings occaecat craft
                        beer farm-to-table, raw denim aesthetic synth nesciunt
                        you probably haven't heard of them accusamus labore
                        sustainable VHS.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card mb-0">
                  <a
                    class="card-header collapsed"
                    data-toggle="collapse"
                    href="#collapseTwo"
                  >
                    <h6 class="mb-0 d-inline-block">
                      What Are the Different Types of Web Hosting Products
                      DreamHost Offers?
                    </h6>
                  </a>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    data-parent="#accordion-one"
                  >
                    <div class="card-body">
                      <p>
                        Ad vegan excepteur butcher vice lomo. Leggings occaecat
                        craft beer farm-to-table, raw denim aesthetic synth
                        nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card mb-0">
                  <a
                    class="card-header collapsed"
                    data-toggle="collapse"
                    href="#collapseThree"
                  >
                    <h6 class="mb-0 d-inline-block">
                      How Do I Buy a Domain Name?
                    </h6>
                  </a>
                  <div
                    id="collapseThree"
                    class="collapse"
                    data-parent="#accordion-one"
                  >
                    <div class="card-body">
                      <p>
                        Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan
                        excepteur butcher vice lomo. Leggings occaecat craft
                        beer farm-to-table, raw denim aesthetic synth nesciunt
                        you probably haven't heard of them accusamus labore
                        sustainable VHS.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card mb-0">
                  <a
                    class="card-header collapsed"
                    data-toggle="collapse"
                    href="#collapseFour"
                  >
                    <h6 class="mb-0 d-inline-block">
                      Can You Help Me Understand More About WordPress?
                    </h6>
                  </a>
                  <div
                    id="collapseFour"
                    class="collapse"
                    data-parent="#accordion-one"
                  >
                    <div class="card-body">
                      <p>
                        Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan
                        excepteur butcher vice lomo. Leggings occaecat craft
                        beer farm-to-table.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--faq section end-->

      <!--testimonial and review section start-->
      <section class="client-review-section ptb-100 gray-light-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
              <div class="section-heading text-center mb-5">
                <h2>What Our Customers Say About Us?</h2>
                <p class="lead">
                  Authoritatively reinvent client-centric e-markets via fully
                  tested process. Objectively restore strategic initiatives
                  through fully researched.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="single-testimonial white-bg shadow-sm rounded p-5">
                <ul class="list-inline ratting-list mb-2">
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                </ul>
                <div class="ratting-content">
                  <h5>Awesome support from technical</h5>
                  <p>
                    Objectively envisioneer magnetic manufactured products and
                    dynamic models. Progressively maximize 2.0 relationships
                    whereas process-centric.
                  </p>
                </div>
                <div class="ratting-author mt-3">
                  <h6>Alex Khamer</h6>
                  <small class="text-right">6 days ago</small>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="single-testimonial white-bg shadow-sm rounded p-5">
                <ul class="list-inline ratting-list mb-2">
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                </ul>
                <div class="ratting-content">
                  <h5>Awesome Design Quality with Support</h5>
                  <p>
                    Objectively envisioneer magnetic manufactured products and
                    dynamic models maximize 2.0 relationships whereas
                    methodologies.
                  </p>
                </div>
                <div class="ratting-author mt-3">
                  <h6>Peter Anderson</h6>
                  <small class="text-right">3 days ago</small>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="single-testimonial white-bg shadow-sm rounded p-5">
                <ul class="list-inline ratting-list mb-2">
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                  <li class="list-inline-item">
                    <span class="fas fa-star"></span>
                  </li>
                </ul>
                <div class="ratting-content">
                  <h5>Contacted support after Midnight</h5>
                  <p>
                    Objectively envisioneer magnetic manufactured products and
                    dynamic models. Progressively maximize 2.0 relationships
                    whereas process-centric.
                  </p>
                </div>
                <div class="ratting-author mt-3">
                  <h6>Jolio Darix</h6>
                  <small class="text-right">8 days ago</small>
                </div>
              </div>
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
                      <li class="list-inline-item">
                        <img
                          src="assets/img/mcafee-logo.png"
                          width="110"
                          alt="security"
                          class="img-fluid"
                        />
                      </li>
                      <li class="list-inline-item">
                        <img
                          src="assets/img/norton-logo.png"
                          width="110"
                          alt="security"
                          class="img-fluid"
                        />
                      </li>
                      <li class="list-inline-item">
                        <img
                          src="assets/img/accredited-logo.png"
                          width="110"
                          alt="security"
                          class="img-fluid"
                        />
                      </li>
                      <li class="list-inline-item">
                        <img
                          src="assets/img/secured-logo.png"
                          width="110"
                          alt="security"
                          class="img-fluid"
                        />
                      </li>
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
              <p class="copyright-text pb-0 mb-0">
                Copyrights © 2021. All rights reserved by
                <a href="https://themeforest.net/user/themetags" target="_blank"
                  >ThemeTags</a
                >
              </p>
            </div>
            <div class="col-md-7 col-lg-6">
              <div class="payment-method text-right">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-amex.svg"
                      alt="amex"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-visa.svg"
                      alt="visa"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-mastercard.svg"
                      alt="mastercard"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-paypal.svg"
                      alt="paypal"
                      width="50"
                    />
                  </li>
                  <li class="list-inline-item">
                    <img
                      src="assets/img/payment-bitcoin.svg"
                      alt="bitcoin"
                      width="50"
                    />
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
    <script src="data.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
  </body>
</html>
