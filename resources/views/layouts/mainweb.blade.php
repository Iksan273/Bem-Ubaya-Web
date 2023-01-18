<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href=".\assets\img\icons\LogoBem.ico">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/yellow.css">
  <link rel="stylesheet" href=".\assets\css\mainweb.css">

  <link rel="preload" href="./assets/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
  @yield('style')

</head>

<body>

  @include('layouts.navbar')

  @yield('content')


      <!-- /.content-wrapper -->
  <footer class="bg-navy text-inverse">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <div class="d-lg-flex flex-row align-items-lg-center">
        <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">BEM Universitas Surabaya</h3>
        {{-- <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap">Try It For Free</a> --}}
      </div>
      <!--/div -->
      <hr class="mt-11 mb-12" />
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            {{-- <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /> --}}
            <p class="mb-4">Kominfo BEM UBAYA <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Alamat</h4>
            <address class="pe-xl-15 pe-xxl-17">Jl. Raya Kalirungkut, Kali Rungkut, Kec. Rungkut, Kota SBY, Jawa Timur 60293</address>
            <a href="mailto:#">info@email.com</a><br /> (031) 2981005
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        {{-- <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div> --}}
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Location</h4>
            {{-- <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p> --}}
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div class="col-lg-5 mr-lg-5 col-10">

                <div class="google-map w-100">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2993386907524!2d112.76503411478292!3d-7.320233874015165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fae149d03a9d%3A0x7311b083dc2502a7!2sUBAYA%20(%20UNIVERSITAS%20SURABAYA%20)!5e0!3m2!1sen!2sid!4v1608482912766!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->

    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>
