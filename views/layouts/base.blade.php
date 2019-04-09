<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $modx->documentObject['description'] }}">
    {{--<meta name="author" content="AuCreative">--}}
    <meta name="keywords" content="{{ $modx->documentObject['keywords'] }}">

    <!-- Title Page-->
    <title>{{ $modx->documentObject['pagetitle'] }}</title>

    <base href="{{ $modx->getConfig('site_url') }}"/>

    <!-- Icons font CSS-->
    <link href="theme/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="theme/assets/css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="theme/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="theme/assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <!--FancyBox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


    <!-- Main CSS-->
    <link href="theme/assets/css/main.min.css" rel="stylesheet" media="all">


    <link href="theme/assets/rediz/css/main.css" rel="stylesheet">

    <!--Favicons-->
    <link rel="shortcut icon" href="theme/assets/rediz/img/logo_red.png">

</head>

<body class="animsition js-preloader">
<div class="page-wrapper">
    <!-- HEADER-->
    <header class="header container-fluid">

        @yield('header')

    </header>
    <!-- END HEADER-->


    <!-- MAIN-->
    <main class="main">

        @yield('main')

        @yield('form')

    </main>
    <!-- END MAIN-->
    <!-- FOOTER-->
    <footer class="footer">

        @yield('footer')

        @yield('modals')

    </footer>
    <!-- END FOOTER-->
</div>

<!-- Jquery JS-->
<script src="theme/assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="theme/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!--FancyBox-->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Main JS-->
<script src="theme/assets/js/global.js"></script>

</body>

</html>
<!-- end document-->