<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie6"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maxi Health</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico"/>

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="/libraries/loader/loaders.min.css">

    <!-- Library - Google Font Familys -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/bootstrap.min.css">

    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="/libraries/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/libraries/fonts/elegant-icons.css">

    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="/libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/libraries/owl-carousel/owl.theme.css">

    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="/libraries/animate/animate.min.css">

    <!-- Library - Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="/libraries/magnific-popup/magnific-popup.css">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/css/navigation-menu.css">

    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="/css/all-ie-only.css"/>
    <![endif]-->

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/shortcodes.css">


    <!--[if lt IE 9]>
    <script src="/js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->

<a id="top"></a>
<!-- Main Container -->
<div class="main-container">
    <!-- Header -->
    <header class="header-main">
        <!-- Logo Block -->
        <div class="middle-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="location">
                            <img src="images/location-ic.png" alt="Location"/>
                        </div>
                    </div>
                </div>
            </div><!-- Container -->
        </div><!-- Logo Block /- -->
        <!-- Navigation -->
        <nav class="navbar ow-navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Accueil</a></li>
                            {{--<li><a href="about.html">About Us</a></li>--}}
                            @guest
                                <li><a href="/login">Se connecter</a></li>
                                <li><a href="/register">S'enregistrer</a></li>
                            @else
                                <li><a href="/profile">Profil</a></li>
                            @endguest
                                <li><a href="/blog">Blog</a></li>
                            @if(Auth::check())
                                        <li><a href="/logout">Se déconnecter</a></li>
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    @include('footer.footer')

</div><!-- Main Container -->

<!-- JQuery v1.11.3 -->
<script src="/js/jquery.min.js"></script>

<!-- Library - Modernizer -->
<script src="/libraries/modernizr/modernizr.js"></script>

<!-- Library - Bootstrap v3.3.5 -->
<script src="/libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

<!-- jQuery Easing v1.3 -->
<script src="/js/jquery.easing.min.js"></script>

<!-- Library - jQuery.appear -->
<script src="/libraries/appear/jquery.appear.js"></script>

<!-- Library - OWL Carousel V.2.0 beta -->
<script src="/libraries/owl-carousel/owl.carousel.min.js"></script>

<!-- jQuery For Number Counter -->
<script src="/libraries/number/jquery.animateNumber.min.js"></script>

<!-- Library - Isotope Portfolio Filter -->
<script src="/libraries/isotope/isotope.pkgd.min.js"></script>

<!-- Library - Magnific Popup - v1.0.0 -->
<script src="/libraries/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - Theme JS -->
<script src="/js/functions.js"></script>
</body>
</html>