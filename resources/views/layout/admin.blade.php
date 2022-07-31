<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset("admin/assets/vendor/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/bootstrap-icons/bootstrap-icons.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/boxicons/css/boxicons.min.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/quill/quill.snow.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/quill/quill.bubble.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/remixicon/remixicon.css")); ?>" rel="stylesheet">
  <link href="<?php echo e(asset("admin/assets/vendor/simple-datatables/style.css")); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset("admin/assets/css/style.css")); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="<?php echo e(asset("admin/assets/img/logo.png")); ?>" alt=""> -->
        <span class="d-none d-lg-block">Admin Magang</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a> -->
          <!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <!-- <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li> -->
            <!-- <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li> -->

            <!-- <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li> -->

          </ul><!-- End Notification Dropdown Items -->

        </li>
        <!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo e(asset("admin/assets/img/profile.png")); ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Session::get('user.name') }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Session::get('user.name') }}</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('logout')); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="<?php echo e(url()->current() == route('dashboard') ? "nav-link" : "nav-link collapsed"); ?>" href="<?php echo e(route('dashboard')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="<?php echo e(url()->current() == route('magang') ? "nav-link" : "nav-link collapsed"); ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="<?php echo e(route('magang')); ?>">
          <i class="bi bi-laptop"></i><span>Master Magang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="<?php echo e(url()->current() == route('magang') || url()->current() == route('magangmelamar') || url()->current() == route('magangselesai') || url()->current() == route('magangditolak') ? "nav-content collapse show" : "nav-content collapse"); ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('magang')); ?>" class="<?php echo e(url()->current() == route('magang') ? "active" : "");?>">
              <i class="bi bi-circle"></i><span>Magang</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('magangmelamar')); ?>" class="<?php echo e(url()->current() == route('magangmelamar') ? "active" : "");?>">
              <i class="bi bi-circle"></i><span>Melamar</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('magangselesai')); ?>" class="<?php echo e(url()->current() == route('magangselesai') ? "active" : "");?>">
              <i class="bi bi-circle"></i><span>Selesai</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('magangditolak')); ?>" class="<?php echo e(url()->current() == route('magangditolak') ? "active" : "");?>">
              <i class="bi bi-circle"></i><span>Ditolak</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- <li class="nav-item">
        <a class="<?php echo e(url()->current() == route('magang') ? "nav-link" : "nav-link collapsed"); ?>" href="<?php echo e(route('magang')); ?>">
          <i class="bi bi-laptop"></i>
          <span>Magang</span>
        </a>
      </li> -->
      
      <li class="nav-item">
        <a class="<?php echo e(url()->current() == route('konten') ? "nav-link" : "nav-link collapsed"); ?>" href="<?php echo e(route('konten')); ?>">
          <i class="bi bi-layout-text-sidebar-reverse"></i>
          <span>Konten</span>
        </a>
      </li>

      

      <!-- End Dashboard Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->

  @include('sweetalert::alert')
  @yield('content')

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset("admin/assets/vendor/apexcharts/apexcharts.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/chart.js")); ?>/chart.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/echarts/echarts.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/quill/quill.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/simple-datatables/simple-datatables.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/tinymce/tinymce.min.js")); ?>"></script>
  <script src="<?php echo e(asset("admin/assets/vendor/php-email-form/validate.js")); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset("admin/assets/js/main.js")); ?>"></script>

  <script>
      $('.delete-item-button').on('click', function () {
        $('#delete-item-form').attr('action', $(this).data('bs-delete-link'));        
      });

      $('.edit-item-button').on('click', function () {
        $('#id').attr('value', $(this).data('bs-item').id);         
        $('#name').attr('value', $(this).data('bs-item').name); 
        $('#position').attr('value', $(this).data('bs-item').position); 
        $('#date').attr('value', $(this).data('bs-item').date);         
        $('#status').val($(this).data('bs-item').status);
        $('#jobdesc_1').attr('value', $(this).data('bs-item').jobdesc_1); 
        $('#jobdesc_2').attr('value', $(this).data('bs-item').jobdesc_2); 
        $('#jobdesc_3').attr('value', $(this).data('bs-item').jobdesc_3); 
        $('#jobdesc_4').attr('value', $(this).data('bs-item').jobdesc_4); 
        $('#jobdesc_5').attr('value', $(this).data('bs-item').jobdesc_5); 
        $('#requirements_1').attr('value', $(this).data('bs-item').requirements_1); 
        $('#requirements_2').attr('value', $(this).data('bs-item').requirements_2); 
        $('#requirements_3').attr('value', $(this).data('bs-item').requirements_3); 
        $('#requirements_4').attr('value', $(this).data('bs-item').requirements_4); 
        $('#requirements_5').attr('value', $(this).data('bs-item').requirements_5); 
        $('#descriptions').text($(this).data('bs-item').descriptions);     
        $('#update-item-form').attr('action', $(this).data('bs-update-link'));    
      });
  </script>

</body>

</html>