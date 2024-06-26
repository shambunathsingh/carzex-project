<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5PDMTJXN');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160010638-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160010638-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'Carzex' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

    <!-- CSS
    ========================= -->
    <!--todo bootstrap min css-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--todo owl carousel min css-->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!--todo slick min css-->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!--todo magnific popup min css-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!--todo ionicons min css-->
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <!--todo animate css-->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--todo jquery ui min css-->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <!--todo slinky menu css-->
    <link rel="stylesheet" href="/assets/css/slinky.menu.css">
    <!-- todo Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <!-- todo Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- todo modernizr min js here-->
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!--  todo fontawosome script  -->
    <script src="https://kit.fontawesome.com/cc09d9b712.js" crossorigin="anonymous"></script>
    <!-- fontawosome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PDMTJXN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <!-- todo Main Wrapper Start -->
    <!--todo header area start-->
    @include('front.layout.header')
    <!--todo header area end-->

    @yield('content')

    <!-- todo footer area start-->
    @include('front.layout.footer')
    <!-- todo footer area end-->


    <!-- JS
============================================ -->
    <!--todo jquery min js-->
    <script src="/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!--todo popper min js-->
    <script src="/assets/js/popper.js"></script>
    <!--todo bootstrap min js-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--todo owl carousel min js-->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!--todo slick min js-->
    <script src="/assets/js/slick.min.js"></script>
    <!--todo magnific popup min js-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!--todo jquery countdown min js-->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!--todo jquery ui min js-->
    <script src="/assets/js/jquery.ui.js"></script>
    <!--todo jquery elevatezoom min js-->
    <script src="/assets/js/jquery.elevatezoom.js"></script>
    <!--todo isotope packaged min js-->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!--todo slinky menu js-->
    <script src="/assets/js/slinky.menu.js"></script>
    <!-- todo Plugins JS -->
    <script src="/assets/js/plugins.js"></script>
    <!-- todo Main JS -->
    <script src="/assets/js/main.js"></script>



</body>


</html>
