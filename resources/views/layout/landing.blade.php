<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Magangx</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset("landing/assets/img/skills.png")); ?>" rel="icon">
  <link href="<?php echo e(asset("landing/assets/img/skills.png")); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset("landing/assets/vendor/aos/aos.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/bootstrap-icons/bootstrap-icons.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/boxicons/css/boxicons.min.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/glightbox/css/glightbox.min.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/remixicon/remixicon.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("landing/assets/vendor/swiper/swiper-bundle.min.css")); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset("landing/assets/css/style.css")); ?>" rel="stylesheet">

  @yield('css')
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="<?php echo e(url()->current() == route('landing') ? "fixed-top" : "fixed-top header-inner-pages"); ?>">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo e(route('landing')); ?>">Magang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo e(asset("landing/assets/img/logo.png")); ?>" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto  <?php echo e(url()->current() == route('landing') ? "active" : ""); ?>" href="<?php echo e(route('landing')); ?>">Home</a></li>
          <li><a class="nav-link scrollto <?php echo e(url()->current() == route('infomagangdetail') ? "active" : ""); ?>" href="<?php echo e(route('infomagangdetail')); ?>">Magang</a></li>
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
          <li><a class="nav-link scrollto" href="#">About</a></li>
          <li><a class="getstarted scrollto" data-bs-toggle="modal" data-bs-target="#login">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Content ======= -->

  @yield('jumbotron')
  
  <main id="main">
    @include('component.cardLogin')
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Magang</h3>
            <p>
              Jl. Kyai Tapa No.1, RT.6/RW.16, Grogol, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440 <br>
              
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br> -->
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <!-- <p></p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Magang</span></strong>
      </div>
      <!-- <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      <!-- </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  @yield('script')

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset("landing/assets/vendor/aos/aos.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/glightbox/js/glightbox.min.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/isotope-layout/isotope.pkgd.min.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/swiper/swiper-bundle.min.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/waypoints/noframework.waypoints.js")); ?>"></script>
  <script src="<?php echo e(asset("landing/assets/vendor/php-email-form/validate.js")); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset("landing/assets/js/main.js")); ?>"></script>

</body>

</html>