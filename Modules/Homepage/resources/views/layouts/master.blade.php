<!doctype html>
<html lang="en">
<head>
    <title>Soilapps Technologies</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Landing page, software, (SaaS) services, Bootstrap 4 template, plugins, app, SEO friendly, business, Sass, Gulp">
    <meta name="description" content="Smooth is a HTML5 Landing Page Build using Gulp, SCSS, and Bootstrap4. It was designed to promote your App, services or business projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="soilapps">
    <link rel="icon" type="image/png" href="{{asset('front_template/favicon/smooth-favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('front_template/favicon/smooth-favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('front_template/favicon/smooth-favicon-144x144.png')}}" sizes="144x144">
    <link rel="icon" type="image/png" href="{{asset('front_template/favicon/smooth-favicon-196x196.png')}}" sizes="196x196">
    <link rel="apple-touch-icon" href="{{asset('front_template/favicon/smooth-favicon-196x196.png')}}">
    <link rel="stylesheet" href="{{asset('front_template/assets/css/style.min.css')}}">
</head>
<body>

<!-- Start Header -->
<header class="header js-header-scroll">
    <nav hidden>
        <div class="nav-header">
            <a href="#" class="brand">
                <img src="{{asset('front_template/assets/brand/logo.png')}}" class="logo" alt="Soilapps" />
            </a>
            <button class="toggle-bar">
                <span class="fa fa-bars"></span>
            </button>
        </div>
        <!-- Start Header menu for mobile -->
        <div class="header__mobile js-header-menu">
            <a href="#" class="header__mobile-brand">Menu</a>
            <button class="toggle-bar header__mobile-toggle">
                <span class="fa fa-remove"></span>
            </button>
        </div>
        <!-- End Header menu for mobile -->
        <ul class="menu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about-us.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="contact-us.html">Contact</a></li>
        </ul>
        <ul class="attributes">
            <li class="header__button"><a href="https://themeforest.net/user/99webpage/portfolio" class="btn btn-primary btn-rounded btn-xs btn-header">Try free</a></li>
            <li class="header__download-icon"><a href="https://themeforest.net/user/99webpage/portfolio"><i class="fa fa-download"></i></a></li>
        </ul>
    </nav>
</header>
<!-- End Header -->

@yield('content')

<!-- Start Back to top -->
<div class="back-to-top js-back-to-top">
    <span class="fa fa-angle-double-up back-to-top__icon"></span>
    <span class="back-to-top__text">TOP</span>
</div>
<!-- End Back to top -->

<!-- Start Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__widget">
                    <img src="{{asset('front_template/assets/brand/logo.png')}}" class="footer__widget-logo" alt="Soilapps" />
                    <p>St.Kemacetan timur No.13 Block Q2 Jakarta - Indonesia</p>
                    <div class="footer__widget-contact">
                        <i class="fa fa-phone"></i>
                        <p>(021) 111-222-333-44</p>
                    </div>
                    <div class="footer__widget-contact">
                        <i class="fa fa-envelope"></i>
                        <p>info@yourdomain.com</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 col-sm-3">
                <div class="footer__widget">
                    <h4 class="footer__widget-title">Product</h4>
                    <ul class="footer__widget-linklist">
                        <li><a href="#">Landing page</a></li>
                        <li><a href="#">Email marketing</a></li>
                        <li><a href="#">HTML template</a></li>
                        <li><a href="#">Angular builder</a></li>
                        <li><a href="#">Worpress theme</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-lg-2 col-sm-3">
                <div class="footer__widget">
                    <h4 class="footer__widget-title">Company</h4>
                    <ul class="footer__widget-linklist">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-lg-2 col-sm-3">
                <div class="footer__widget">
                    <h4 class="footer__widget-title">Resources</h4>
                    <ul class="footer__widget-linklist">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">F.A.Q</a></li>
                        <li><a href="#">Testimoni</a></li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-sm-3">
                <div class="footer__widget">
                    <h4 class="footer__widget-title">Follow us</h4>
                    <ul class="footer__widget-network">
                        <li><a href="#" class="footer__widget-network-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="footer__widget-network-link"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="footer__widget-network-link"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="footer__widget-network-link"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="footer__subfooter">
                    <div class="row">
                        <div class="col-md-6">
                            <p>© <a href="#">99webpage</a> | Web Design Indonesia 2020. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="footer__subfooter-liststyle">
                                <li><a href="#">Terms Of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('front_template/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front_template/assets/js/main.min.js')}}"></script>
<script src="{{asset('front_template/assets/js/scripts.min.js')}}"></script>
</body>
</html>
