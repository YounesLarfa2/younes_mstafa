<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin2/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin2/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('admin2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin2/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin2/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  @include('admin2.partials.header')
  @include('admin2.partials.aside')
  <main id="main" class="main">

    @yield('content')

  </main>

  <!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin2/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin2/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin2/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin2/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin2/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin2/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin2/js/jquery-3.7.0.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin2/js/main.js')}}"></script>
  @include('admin2.categories.modals')
  @yield('script')
</body>

</html>