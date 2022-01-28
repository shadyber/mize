 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mize Baltina') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/x-icon/01.png">

    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/icofont.min.css">
    <link rel="stylesheet" href="/assets/css/lightcase.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
     @yield('css')


 </head>

<body id="app">

<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!--search area-->
<div class="search-input">
    <div class="search-close">
        <i class="icofont-close-circled"></i>
    </div>
    <form>
        <input type="text" name="text" placeholder="Search Heare">
        <button class="search-btn" type="submit">
            <i class="icofont-search-2"></i>
        </button>
    </form>
</div>
<!-- search area -->
@include('layouts.inc.header')

<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">@yield('title')</h4>
            <ul class="lab-ul">
                <li><a href="/">Home</a></li>
                <li><a class="active">@yield('sub_title')</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->
@yield('content')

@include('layouts.inc.footer')

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->


<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/fontawesome.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/swiper.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/lightcase.js"></script>
<script src="/assets/js/functions.js"></script>
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
