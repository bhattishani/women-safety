<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield("title") {{ config("app.name") }}</title>
<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/mobile.css">
<link rel="stylesheet" href="assets/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link rel="stylesheet" href="assets/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="assets/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link href="assets/css/aos.css" rel="stylesheet">
</head>
<body>
    <!-- HEADER-SECTION -->
    <div class="home-header-section">
        @include('layouts.header')
        @yield('banner-section')
    </div>


    @yield('content')
    <!-- Footer-Section -->
    @include('layouts.footer')

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/custom-script.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/text-animations.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    @yield('scripts')
</body>

</html>
