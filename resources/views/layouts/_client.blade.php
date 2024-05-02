<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Photolancers - A Place for Photographic Freelancers">
    <meta name="keywords" content="Photolancers - A Place for Photographic Freelancers">
    <meta name="author" content="Photolancers">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/template/favicon.svg')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>Photolancers - A Place for Photographic Freelancers </title>
    @yield('style')
</head>
<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img src="{{asset('assets/imgs/template/loading.gif')}}" alt="Photolancers"></div>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{route('home')}}"><img alt="jobBox"
                                                                                  src="assets/imgs/template/jobhub-logo.svg"></a>
                </div>
            </div>
            <div class="header-nav">
                <nav class="nav-main-menu">
                    <ul class="main-menu">
                        <li>
                            <a class="active" href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="jobs-grid.html">Packages</a>
                        </li>
                        <li>
                            <a href="companies-grid.html">Photographers</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">Blog</a>
                        </li>
                    </ul>
                </nav>
                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                        class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
            <div class="header-right">
                <div class="block-signin">
                    <a class="text-link-bd-btom hover-up" href="{{route('register')}}">Register</a>
                    <a class="btn btn-default btn-shadow ml-40 hover-up" href="{{route('login')}}">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li>
                                <a class="active" href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="jobs-grid.html">Packages</a>
                            </li>
                            <li>
                                <a href="companies-grid.html">Photographers</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('login')}}">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<footer class="footer mt-50">
    <div class="container">
        <div class="row">
            <div class="footer-col-1 col-md-3 col-sm-12"><a href="{{route('home')}}">
                    <img alt="jobBox" src="assets/imgs/template/jobhub-logo.svg"></a>
                <div class="mt-20 mb-20 font-xs color-text-paragraph-2">Photolancers - A Place for Photographic
                    Freelancers
                </div>
                <div class="footer-social">
                    <a class="icon-socials icon-facebook" href="#"></a>
                    <a class="icon-socials icon-twitter" href="#"></a>
                    <a class="icon-socials icon-linkedin" href="#"></a>
                </div>
            </div>
            <div class="footer-col-2 col-md-2 col-xs-6">
                <h6 class="mb-20">Resources</h6>
                <ul class="menu-footer">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Photographers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col-3 col-md-2 col-xs-6">
                <h6 class="mb-20">More</h6>
                <ul class="menu-footer">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <div class="footer-col-4 col-md-3 col-sm-12">
                <h6 class="mb-20">Download App</h6>
                <p class="color-text-paragraph-2 font-xs">Coming Soon!</p>
                {{--                <div class="mt-15"><a class="mr-5" href="#"><img src="assets/imgs/template/icons/app-store.png" alt="joxBox"></a><a href="#"><img src="assets/imgs/template/icons/android.png" alt="joxBox"></a></div>--}}
            </div>
        </div>
        <div class="footer-bottom mt-50">
            <div class="row">
                <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2022. JobBox all right reserved</span>
                </div>
                <div class="col-md-6 text-md-end text-start">
                    <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy Policy</a><a
                            class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a
                            class="font-xs color-text-paragraph" href="#">Security</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/main.js?v=4.1"></script>
@yield('script')
</body>
</html>
