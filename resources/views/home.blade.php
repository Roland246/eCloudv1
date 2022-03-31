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

    {{-- header --}}
    @include('layouts/header')
    {{-- End header --}}

{{-- main --}}
<div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
    </div>
    <div class="row" style="margin-top: 30px; margin-bottom:50px;">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des commandes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">

                                          <table class="table table-hover text-nowrap">
                                <thead>
                                  <tr>
                                    <th>Core</th>
                                    <th>Memory</th>
                                    <th>Stockage</th>
                                    <th>Bandwidth</th>
                                    <th>price</th>
                                  </tr>
                                </thead>
                                <tbody>

                                    @foreach ($commandes as $commande )
                                     <tr>
                                        <td> {{$commande->core}} </td>
                                        <td> {{$commande->memory}} </td>
                                        <td> {{$commande->storage}} </td>
                                        <td> {{$commande->bandwidth}} </td>
                                        <td> {{$commande->price}} </td>
                                      </tr>
                                    @endforeach


                                </tbody>
                              </table>

                              {{-- {{$commandes->links()}} --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</div>
{{-- End main --}}
    {{-- footer --}}
    @include('layouts/footer')
    {{-- End footer --}}
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



