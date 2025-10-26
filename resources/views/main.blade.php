
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Oct 2025 06:34:46 GMT -->
<head>

<!-- [Meta] -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
<meta name="author" content="premypunchu" />
<meta name="theme-color" content="#1e293b" />
<meta name="color-scheme" content="light dark" />



<!-- [Favicon] icons -->
<link rel="icon" href="{{asset('assets/images/favicon.svg')}}" type="image/svg+xml" />
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}" />
<link rel="manifest" href="{{asset('assets/images/site.html')}}" />
    <!-- map-vector css -->
    <link rel="stylesheet" href="assets/css/plugins/jsvectormap.min.css" />
    <!-- [Font] Family -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="assets/css/plugins/phosphor-icons.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="assets/css/plugins/tabler-icons.min.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="assets/css/style-preset.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
<!-- [Vite Development Scripts] -->
<!-- Development script removed for production -->
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
@include('layouts.sidebar')
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
@include('layouts.header')

@yield('content')

@include('layouts.footer')


    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script data-cfasync="false" src="https://demo.dashboardpack.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins/apexcharts.min.js"></script>
    
    <!-- Vector maps -->
    <script src="assets/js/plugins/jsvectormap.min.js"></script>
    <script src="assets/js/plugins/world.js"></script>
    
    <!-- Enhanced Dashboard Widgets -->
    <script src="assets/js/widgets/world-low.js"></script>
    <script src="assets/js/widgets/device-chart.js"></script>
    <script src="assets/js/widgets/happy-sad-ball.js"></script>
    

    <!-- [Page Specific JS] end -->
    <!-- Required JS -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/simplebar.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/i18next.min.js"></script>
<script src="assets/js/plugins/i18nextHttpBackend.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/multi-lang.js"></script>

  </body>
  <!-- [Body] end -->

<!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Oct 2025 06:38:38 GMT -->
</html>