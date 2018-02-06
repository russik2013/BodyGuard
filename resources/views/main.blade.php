<!DOCTYPE html>
<html lang="en">
<head>
    <title>
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- Favicons -->
    <!--<link rel="shortcut icon" href="img/favicon.ico">-->
    <!--<link rel="apple-touch-icon" href="img/apple-touch-icon.png">-->
    <!--<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">-->
    <!--<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">-->

    <!-- Lazyload -->
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light">

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
</header> <!-- end sidenav -->

<main class="main oh" id="main">
    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <img class="logo__img" src="img/logo@2x.png" srcset="img/logo@2x.png 1x" alt="logo">
            <div class="container relative">
                <div class="flex-parent">
                    <!-- Mobile logo -->

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">
                            <li class="active">
                                <a href="{{url('/')}}">Новости</a>
                            </li>

                            <li class="nav__dropdown">
                                <a href="{{url('/about')}}">О федерации</a>
                            </li>

                            <li >
                                <a href="{{url("/training/")}}">Тренировка</a>
                            </li>

                            <li class="nav__dropdown">
                                <a href="{{url("/callback")}}">Связаться с нами</a>
                            </li>
                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right nav--align-right d-lg-flex">

                        <!-- Socials -->
                        <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                            <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram social--nobase" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->

    @yield('home')
    @yield('post')
    @yield('callback')
    @yield('about')
    @yield('training')

    <!-- Footer -->
    <footer class="footer footer--dark">

        <div class="footer__bottom">
            <div class="container" style="padding: 0">
                <div class="row">
                    <div class="col-lg-5 order-lg-5 text-right text-md-center" style="padding: 0">
                        <div class="widget widget_nav_menu" style="padding-top: 8px">
                            <ul>
                                <li><a href="{{url('/')}}">Новости</a></li>
                                <li><a href="{{url('/about')}}">О федерации</a></li>
                                <li><a href="{{url("/training/")}}">Тренировка</a></li>
                                <li><a href="{{url("/callback")}}">Связаться с нами</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-md-center" style="text-align: center">
                      <span class="copyright">
                        &copy; 2018 | Made by <a href="http://comnd-x.com/">Comnd-X</a>
                      </span>
                    </div>

                    <div class="col-lg-3 col-md-6" style="padding: 0">
                        <div class="widget widget__newsletter">
                            <div class="socials mb-20">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/easing.min.js")}}"></script>
<script src="{{asset("js/owl-carousel.min.js")}}"></script>
<script src="{{asset("js/twitterFetcher_min.js")}}"></script>
<script src="{{asset("js/jquery.newsTicker.min.js")}}"></script>
<script src="{{asset("js/modernizr.min.js")}}"></script>
<script src="{{asset("js/scripts.js")}}"></script>



</body>
</html>