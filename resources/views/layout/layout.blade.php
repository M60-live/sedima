<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Financial Advice">
    <meta name="keywords" content="Sedima,Financial Advice">
    <meta name="author" content="Alpha to Beta">
    <!-- css Links
    ====================================================-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
    <!--====================================================
    Typography links
    Import Google Fonts
    ======================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>Sedima - Advisory and Finance</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

</head>
<body id="top">
<!-- Start Back to top
====================================================-->
<div class="bg-secondery color-white" id="scroll" style="display: inline;"><i class="fa fa-angle-up"></i></div>
<!-- End Back to top
====================================================-->
<!-- Start Header
====================================================-->
<header id="header" class="nav-on-top">
    <div class="top-header bg-secondery color-white icon-primary d-md-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <ul>
                        <li><i class="fa fa-phone mr-10"></i>(012) 345 657 900</li>
                        <li><i class="fa fa-envelope mr-10"></i>info@sedimaadvisoryandfinance.co.za</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-3">
                    <ul class="color-white-a hover-primary float-right">
                        {{--<li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>--}}
                        <li><a class="quote-btn btn-primary" href="#">Get a Quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-header bg-white py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
{{--                        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/logo.png') }}" alt="logo"></a>--}}
                        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo/2.png') }}" style="height: 70px !important;" alt="logo"></a>

                        <button class="toggle-btn" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/service/financial_advisory_consulting">Financial Advisory & Consulting</a></li>
                                        <li><a class="dropdown-item" href="/service/accounting_bookkeeping">Accounting & Bookkeeping</a></li>
                                        <li><a class="dropdown-item" href="/service/risk_assessment_management">Risk Assessment & Management</a></li>
                                        <li><a class="dropdown-item" href="/service/financial_statement_preparation">Financial Statement Preparation</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                                {{--<li class="nav-item">
                                    <form class="search-field">
                                        <input type="search" class="search form-control" placeholder="Search Here"/>
                                        <span>
                                            <i class="fa fa-search"></i>
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </form>
                                </li>--}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header
====================================================-->
@yield("content")
<!-- Star Footer One
====================================================-->
<footer class="bg-secondery">
    <div class="container">
        <div class="row py-80">
            <div class="col-lg-5 col-md-6">
                <div class="footer-widget sm-mt-0">
                    <div class="footer-logo mb-20">
                        <a href="/"><img class="col-lg-7" src="{{ asset('images/logo/4.png') }}" alt="black and white logo"></a>
                    </div>
                    <div class="text-area color-white">
                        <p>Sedima Advisory and Finance, committed to helping businesses realize their full potential.</p>
                    </div>
                    <ul class="widget-contact-info color-white icon-primary link-list-b-15 mt-30">
{{--                        <li><span class="mr-20"><i class="fa fa-phone" aria-hidden="true"></i></span> (012) 345 657 900</li>--}}
                        <li><span class="mr-20"><i class="fa fa-envelope" aria-hidden="true"></i></span> info@sedimaadvisoryandfinance.co.za</li>
{{--                        <li><span class="mr-20"><i class="fa fa-skype" aria-hidden="true"></i></span> Expoge.multipurpose</li>--}}
                        <li><span class="mr-20"><i class="fa fa-map-marker" aria-hidden="true"></i></span>379 San Isidro Street, Silverwood Estate, Centurion.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Links</h3>
                    <ul class="hover-white-primary link-list-b-15">
                        <li><a href="/service/financial_advisory_consulting">Our Services</a></li>
                        <li><a href="/contact">FAQ</a></li>
                        <li><a href="/contact">Help</a></li>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget color-white">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Download</h3>
                    <p>Get our digital brochure here.</p>
                    <form class="mt-30">
                        <input class="form-control" name="email" type="text" placeholder="Email Address">
                        <button class="btn btn-primary mt-15">Download</button>
                    </form>
                    <ul class="socal media-two d-inline-block color-secondery mt-30">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-t-1-dark">
    <div class="copyright-1 bg-secondery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="copyright-style-2 color-white py-15 text-center">
                        Sedima Advisory and Finance @ 2025. All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer One
====================================================-->
<!-- jquery Links
====================================================-->
<script src="{{ asset('js/jquery-v3.4.1.js') }}"></script>
<script src="{{ asset('js/greensock.js') }}"></script>
<script src="{{ asset('js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(document).ready(function() {

        $('#slider').layerSlider({
            sliderVersion: '6.2.1',
            type: 'fullwidth',
            responsiveUnder: 0,
            layersContainer: 1200,
            maxRatio: 1,
            parallaxScrollReverse: true,
            hideUnder: 0,
            hideOver: 100000,
            skin: 'v5',
            showBarTimer: false,
            showCircleTimer: false,
            thumbnailNavigation: 'disabled',
            allowRestartOnResize: true,
            skinsPath: 'images/skins/',
            height: 805
        });

    });
</script>
</body>
</html>
