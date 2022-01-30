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
<!-- Banner Section Start Here -->
<section class="banner">
    <div class="banner-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-slider-part"
                     style="background-image: url(/assets/images/banner/bg-images/01.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Prepared Cultural Spices </B>
                                        Chickens Specialty Game Meats
                                        EthiopianAnd More!!! </h1>
                                    <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-slider-part"
                     style="background-image: url(/assets/images/banner/bg-images/02.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Prepared Cultural Spices </B>
                                        Chickens Specialty Game Meats
                                        EthiopianAnd More!!! </h1>
                                    <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-slider-part"
                     style="background-image: url(/assets/images/banner/bg-images/01.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Prepared Cultural Spices </B>
                                        Chickens Specialty Game Meats
                                        EthiopianAnd More!!! </h1>
                                    <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Banner Section Ending Here -->

<!-- about section start here -->
<section class="about-section relative padding-tb bg-ash">
    <div class="container">
        <div class="row mb-15">
            <div class="col-xl-7 col-12">
                <div class="about-left-part">
                    <div class="about-item">
                        <div class="about-inner">
                            <div class="about-thumb">
                                <img src="/assets/images/about/05.jpg" alt="about">
                            </div>
                            <div class="about-content">
                                <div class="ac-thumb">
                                    <img src="/assets/images/about/icon/01.png" alt="about Image">
                                </div>
                                <div class="ac-content">
                                    <h6>Daily 700+ Collect</h6>
                                    <p>Continually Aggregate web interfaces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-inner">
                            <div class="about-thumb">
                                <img src="/assets/images/about/06.jpg" alt="about">
                            </div>
                            <div class="about-content">
                                <div class="ac-thumb">
                                    <img src="/assets/images/about/icon/02.png" alt="about Image">
                                </div>
                                <div class="ac-content">
                                    <h6>500+ Chicken</h6>
                                    <p>Continually Aggregate web interfaces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-inner">
                            <div class="about-thumb">
                                <img src="/assets/images/about/07.jpg" alt="about">
                            </div>
                            <div class="about-content">
                                <div class="ac-thumb">
                                    <img src="/assets/images/about/icon/03.png" alt="about Image">
                                </div>
                                <div class="ac-content">
                                    <h6>Daily 100kg+ Meet</h6>
                                    <p>Continually Aggregate web interfaces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-12">
                <div class="about-wrapper p-0">
                    <div class="about-title">
                        <h2><span class="d-lg-block">Welcome to Our Mize</span><span class="d-lg-block"> Online Stor.</span></h2>
                    </div>
                    <div class="about-content">
                        <p>Continually productize compelling quality for packed with  Elated  productize compelling quality for packed with all Elated Them Setting up to website and creating pages. </p>
                        <ul class="lab-ul list-group mb-3">
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are providing different services</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are one of leading company </li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Profitability is the primary goal of all business</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Learn how to grow your Business </li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your business</li>
                        </ul>
                        <a href="#" class="lab-btn mt-2"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section ending here -->


<!-- product category section start here -->
<section class="product-section relative padding-tb bg-ash">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-header">
                    <h3>Popular Products</h3>
                    <p>Popular and latest products in our stor </p>
                </div>
            </div>
            <div class="col-12">
                <div class="section-wrapper">
                    <div class="row justify-content-center mb-15-none">

                        @foreach(\App\Models\Item::lastN(8) as $item)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-item-2">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img src="{{$item->thumb}}" alt="{{$item->title}}">
                                    </div>
                                    <div class="product-content">
                                        <a href="#"><h6> {{$item->title}}</h6></a>
                                        <div class="rating">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6 class="price">$ {{$item->price}}</h6>
                                        <div class="cart-option">
                                            <a href="#" class="lab-btn add-to-cart" itemid="{{$item->id}}" qnt="1"><span>Add To Cart</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 mb-2">
            <a href="#" class="lab-btn"><span>Shop Now</span></a>
        </div>
    </div>
</section>
<!-- product category section ending here -->


<!--Video Section Start here-->
<div class="video-section padding-tb bg-ash">
    <div class="container">
        <div class="video-section-wrapper mb-15">
            <div class="video-content">
                <img src="/assets/images/bg-images/video-bg.jpg" alt="Video-background">
                <a href="https://youtu.be/cvOx1uC1-oA" data-rel="lightcase"><img src="/assets/images/bg-images/yt-icon.png" alt="Play"></a>
            </div>
        </div>
    </div>
</div>
<!--Video Section Ending here-->


<!-- blog section start here -->
<section class="blog-section relative padding-tb bg-ash">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h3>Our Recent Blog Posts</h3>
                    <p> Recent Articles Created by Admin</p>
                </div>
            </div>
            <div class="col-12">
                <div class="section-wrapper">
                    <div class="row justify-content-center">

                       @foreach(\App\Models\Blog::lastN(3) as $blog)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card border-none">
                                <img src="{{$blog->thumb}}" class="card-img-top" alt="{{$blog->title}}">
                                <div class="card-body p-1 mt-3">
                                    <a href="/blog/{{$blog->slug}}">
                                        <h6 class="card-title">{{$blog->title}}</h6>
                                    </a>
                                    <p class="card-text mb-3">{{substr($blog->detail,0,200)}} ...</p>
                                    <div class="text-btn">
                                        <a href="/blog/{{$blog->slug}}"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                           @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section ending here -->

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

</body>
</html>
