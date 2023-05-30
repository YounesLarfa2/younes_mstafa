<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <meta name="_token" content="{{csrf_token()}}" />

    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/bootstrap/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/footable.standalone.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/fullcalendar@5.2.0.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/leaflet.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/MarkerCluster.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/MarkerCluster.Default.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/star-rating-svg.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/trumbowyg.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/wickedpicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- endinject -->
</head>

<body class="layout-light side-menu overlayScroll">

    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>


    <div class="mobile-author-actions"></div>

    <main class="main-content">
        @include('admin.partials.header')

        <div class="row justify-content-between">
            <div class="col-2">
                @include('admin.partials.aside')
            </div>
            <div class="col-9">
                
                @yield('content')
            </div>
        
        </div>

        <!-- //admin.partials.footer -->
        </div>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <!-- inject:js-->

    <script src="{{asset('admin/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/bootstrap/popper.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/accordion.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/autoComplete.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/charts.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/drawer.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/dynamicBadge.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/dynamicCheckbox.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/footable.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/fullcalendar@5.2.0.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/google-chart.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.filterizr.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.mCustomScrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/jquery.star-rating-svg.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/leaflet.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/loader.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/message.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/moment.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/muuri.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/notification.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/popover.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/slick.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/trumbowyg.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_assets/js/wickedpicker.min.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/drag-drop.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/footable.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/full-calendar.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/googlemap-init.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/jvectormap-init.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/leaflet-init.js')}}"></script>
    <script src="{{asset('admin/assets/theme_assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- endinject-->
</body>

</html>