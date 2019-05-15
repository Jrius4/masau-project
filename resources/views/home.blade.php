<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/universal/2-0-2/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 03:48:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masau</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon and apple touch icons-->
    {{-- <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/img/favicon.ico" type="image/x-icon"> --}}
    {{-- <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png"> --}}
    {{-- <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favimasau.JPG"> --}}
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <link rel="shortcut icon" href="assets/img/favimasau.JPG" type="image/x-icon">
  </head>
  <body>
    @include('layouts.navbar')

    @yield('content')

          <!-- GET IT-->
          <div class="get-it">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 text-center p-3">
                    <h3>We take a systematic approach to value creation. </h3>
                  </div>
                  <div class="col-lg-4 text-center p-3">   <a href="/contactus" class="btn btn-template-outlined-white">Contact Us</a></div>
                </div>
              </div>
            </div>

{{-- start footer --}}

<footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="h6">About Us</h4>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <hr>
          <h4 class="h6">Join Our Monthly Newsletter</h4>
          <form>
            <div class="input-group">
              <input type="text" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
              </div>
            </div>
          </form>
          <hr class="d-block d-lg-none">
        </div>
        <div class="col-lg-3">
          <h4 class="h6">Blog</h4>
          <ul class="list-unstyled footer-blog-list">
            <li class="d-flex align-items-center">
              <div class="image"><img src="assets/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="image"><img src="assets/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="image"><img src="assets/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
              </div>
            </li>
          </ul>
          <hr class="d-block d-lg-none">
        </div>
        <div class="col-lg-3">
          <h4 class="h6">Contact</h4>
          <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
          <hr class="d-block d-lg-none">
        </div>
        <div class="col-lg-3">
          <ul class="list-inline photo-stream">
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
            <li class="list-inline-item"><a href="#"><img src="assets/img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center-md">
            <p>&copy; 2019. Your company / name goes here</p>
          </div>
          <div class="col-lg-8 text-right text-center-md">
            <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a>& <a href="https://fity.cz/ostrava">Fity</a></p>
            <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  
</div>

{{-- end footer --}}
    <!-- Javascript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="assets/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/gmaps.init.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>