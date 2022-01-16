 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mize Baltina') }}</title>

    <meta name="description" content="mize - balitna store online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://mizetourandtravel.com/wp-content/uploads/2019/10/ou1-150x112.png" sizes="32x32" />
    <link rel="icon" href="https://mizetourandtravel.com/wp-content/uploads/2019/10/ou1.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://mizetourandtravel.com/wp-content/uploads/2019/10/ou1.png" />

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- stylesheets -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/line-awesome.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/jquery.nice-number.css">
    <link rel="stylesheet" href="/css/mean-menu.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/style.css">
    @yield('css')


</head>


<body id="app">

<!-- scroll top button -->
<div id="scrollToTop" class="scrollTop" >
    <i class="las la-arrow-up"></i>
</div>
<!-- =============Preloader Starts=============-->
<div class="loader">
    <div class="face face-1">
        <div class="circle"></div>
    </div>
    <div class="face face-2">
        <div class="circle"></div>
    </div>
</div>
<!-- =============Preloader Ends=============-->

@include('layouts.inc.header')
<!-- Page Title Area Start -->
<div class="page-title-area pt-150 pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-titel-detalis  ">
                    <div class="section-title">
                        @include('layouts.inc.flash_message')
                        <h2>@yield('title')</h2>
                    </div>
                    <div class="page-bc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item position-relative active" aria-current="page"><a
                                        href="/here">@yield('title')</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title area Ends -->
<!-- Contact Area Start -->
<div class="contact_us pt-110">
  @yield('content')
</div>
<!-- Contact Area Ends -->
<!-- Footer Area Starts -->
<footer class="footer-area mt-115">
    <div class="container">
        <div class="footer-menu pt-120">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 mb-lg-0 pt-15">
                        <div class="logo pb-30">
                            <a href="index.html"><img src="img/logo/logo.png" alt="img"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li>Email: <span class="ml-5">mize@gmail.com</span></li>
                                <li>Phone:  <span class="ml-5">+948 256 347 968</span></li>
                            </ul>
                            <p class="pr-65">Subscribe to our newsleter and stay
                                up to date with latest offers and
                                upcoming trends.</p>
                            <div class="footer-input position-relative mt-30">
                                <input type="email" placeholder="Email">
                                <button><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 mb-lg-0">
                        <h4>About Us</h4>
                        <ul class="footer-info pt-10">
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Our Outlets</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Sales and Retails</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Areas we serve</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Career at mize</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="contact_page.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>Help and Support</h4>
                        <ul class="footer-info pt-10">
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Track my order</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Our top products</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="shopping_cart.html">My cart</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Sign in</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="checkout_page.html">Shipping Calculator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6  pl-xl-0">
                    <div class="footer-widget">
                        <h4>Pages & Resources</h4>
                        <ul class="footer-info pt-10">
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">About Us</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="shop_grid.html">Shop Page</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="shop_grid.html">Category page</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="about_us.html">Sign in page</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="404.html">404 page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom mt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 order-md-2 order-lg-1">
                    <div class="copyright mt-15">
                        <p>Copyright © 2020 | Designed by <a href="https://themeforest.net/user/wpsmasher"
                                                             target="_blank">Wpsmasher</a></p>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-3 col-md-12 order-md-1 order-lg-2">
                    <ul class="social-icon text-center mt-15">
                        <li><a href=""><i class="lab la-facebook-f"></i></a></li>
                        <li><a href=""><i class="lab la-twitter"></i></a></li>
                        <li><a href=""><i class="lab la-instagram"></i></a></li>
                        <li><a href=""><i class="lab la-vimeo"></i></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 order-md-2 order-lg-3">
                    <div class="policy  text-right mt-15">
                        <a class="position-relative" href="#">Terms of Use </a>
                        <a class="ml-40" href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Area Ends -->
<!-- scripts -->

<script src="/js/vendor/jquery.min.js"></script>
<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/vendor/popper.min.js"></script>
<script src="/js/vendor/jquery-mean-menu.min.js"></script>
<script src="/js/vendor/owl.carousel.min.js"></script>
<script src="/js/vendor/slick.min.js"></script>
<script src="/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="/js/vendor/isotope.min.js"></script>
<script src="/js/vendor/jquery.nice-number.js"></script>

<script src="/js/scripts.js"></script>
<script>
    var qnt=1;
    function getqnt(){
        qnt = document.getElementById("qtybutton").value;
    }
    function getquantity(){
        return qnt;
    }
    $( ".add-to-cart" ).click(function() {
        var itemid=$(this).attr("itemid");
        var cbtn=$(this);
        var itemqnt=$(this).attr('qnt')
        $.get("/multipleaddtocart/"+itemid+"/"+qnt, function(data){
            // Display the returned data in browser
            cbtn.animate({
                opacity: 0.25,
                left: "+=5000",
                top: "-=5000",
                height: "toggle"
            }, 50, function() {
                // Animation complete.
            });
            $('#cartCount').html(data);
        });
    });
</script>
@yield('js')
</body>

</html>
