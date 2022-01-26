<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">

    <!-- site title -->
    <title>Mize Baltina Online Store</title>

    <meta name="description" content="mize - balitna store online">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicons and shortcut icons -->
    <link rel="apple-touch-icon" href="/icon.png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body id="app">

<!-- scroll top button -->
<div id="scrollToTop" class="scrollTop" >
    <i class="las la-arrow-up"></i>
</div>


@include('layouts.inc.header')

<!-- slider area starts -->
<div class="slider-area pt-105">
    <div class="single-slide slider-height position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-8 offset-xl-1 offset-lg-1 offset-xl-0 ">
                    <div class="slider-description mt-200">
                        <h1>Mize <br> Baltina</h1>
                        <p class="pb-30 pr-120">Lorem ipsum dolor sit amet, cons
                            ectetur adipisicing elit, sed do
                            eiusmod tempor.</p>
                        <a href="/item" class="slider-btn position-relative">SHOP NOW</a>
                    </div>
                </div>
                <div class="slider-images ">
                    <div class="slider-image-bg">
                        <img src="/img/slider-area/1.png" alt="BALTNA">
                        <span class="slider-price-badge">
                <span>$5.59</span>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide slider-height position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-8 offset-xl-1 offset-lg-1 offset-xl-0 ">
                    <div class="slider-description mt-200">
                        <h1>QUALITY <br> BALTNA</h1>
                        <p class="pb-30 pr-120">Lorem ipsum dolor sit amet, cons
                            ectetur adipisicing elit, sed do
                            eiusmod tempor.</p>
                        <a href="Shop_grid.html" class="slider-btn position-relative">SHOP NOW</a>
                    </div>
                </div>
                <div class="slider-images ">
                    <div class="slider-image-bg">
                        <img src="img/slider-area/2.png" alt="BALTNA">
                        <span class="slider-price-badge">
                <span>$5.59</span>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide slider-height position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-8 offset-xl-1 offset-lg-1 offset-xl-0 ">
                    <div class="slider-description mt-200">
                        <h1>QUALITY <br> BALTNA</h1>
                        <p class="pb-30 pr-120">Lorem ipsum dolor sit amet, cons
                            ectetur adipisicing elit, sed do
                            eiusmod tempor.</p>
                        <a href="/item" class="slider-btn position-relative">SHOP NOW</a>
                    </div>
                </div>
                <div class="slider-images ">
                    <div class="slider-image-bg">
                        <img src="/img/slider-area/3.png" alt="BALTNA">
                        <span class="slider-price-badge">
                <span>$5.59</span>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide slider-height position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-8 offset-xl-1 offset-lg-1 offset-xl-0 ">
                    <div class="slider-description mt-200">
                        <h1>QUALITY <br> BALTNA</h1>
                        <p class="pb-30 pr-120">Lorem ipsum dolor sit amet, cons
                            ectetur adipisicing elit, sed do
                            eiusmod tempor.</p>
                        <a href="/item" class="slider-btn position-relative">SHOP NOW</a>
                    </div>
                </div>
                <div class="slider-images ">
                    <div class="slider-image-bg">
                        <img src="img/slider-area/4.png" alt="BALTNA">
                        <span class="slider-price-badge">
                <span>$5.59</span>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider area ends -->

<!-- popular category area starts -->
<div class="popular-category-area pt-110">
    <div class="container">
        <div class="section-title text-center pb-45">
            <h2>POPULAR CATEGORIES</h2>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="category-img-item first-items position-relative">
                    <div class="cat-thumb overflow-hidden">
                        <img src="/img/popular-categories/category-1.jpg" alt="img1">
                    </div>
                    <div class="category-texts ">
                        <span>Popular</span>
                        <h3><a href="/cat">Ethiopian Spices</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="category-img-item second-items position-relative mb-30">
                    <div class="cat-thumb overflow-hidden">
                        <img src="/img/popular-categories/category-2.png" alt="img2">
                    </div>
                    <div class="category-texts position-absolute">
                        <h3><a href="/cat">Baltina</a></h3>
                    </div>
                </div>

                <div class="category-img-item third-items position-relative">
                    <div class="cat-thumb overflow-hidden">
                        <img src="/img/popular-categories/4.jpg" alt="img3">
                    </div>
                    <div class="category-texts position-absolute">
                        <h3><a href="/cat">Ethiopian Pottery</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular category area ends -->

<!-- new arrival area starts -->
<div class="new-arrival pt-110 ">
    <div class="container">
        <div class="section-title text-center">
            <h2>NEW ARRIVAL</h2>
        </div>
        <div class="arrival-menu text-center pt-20">
            <button class="abtn" data-filter="*">All</button>


            @foreach(\App\Models\ItemCategory::allCategories() as $category)
            <button class="abtn" data-filter=".cat{{$category->id}}">{{$category->title}}</button>
            @endforeach
        </div>
        <div class="arrival-product pt-45">
            <div class="row grid">
                @foreach(\App\Models\Item::lastN(6) as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat{{$item->Category->id}}">
                    <div class="arrival-items arrival-new-items text-center mb-55">
                        <div class="arrival-img">
                            <img src="{{$item->thumb}}" alt="{{$item->name}}"  height="450px">
                        </div>
                        <div class="arrival-details position-relative pt-25">
                            <h5><a href="/item/{{$item->slug}}">{{$item->name}}</a></h5>
                            <ul class="rating">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                            <div class="price">
                                <span>${{$item->price}}</span>
                            </div>
                            <div class="buy-info">
                                <button class="slider-btn add-btn float-left position-relative add-to-cart" href="#" itemid="{{$item->id}}">Add To Cart</button>
                                <ul class="wishlist text-right">
                                     <li><a href="/item/{{$item->slug}}" ><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        <div class="row">
            <div class="view-items ml-auto mr-auto mt-50">
                <a class="p-btn position-relative" href="/item">
                    <span>Load more</span>
                </a>
            </div>
        </div>

    </div>
</div>
<div class="product-popupList">
    <div class="product-popup shop-details position-relative ">
        <div class="close-popup">
            <button>X</button>
        </div>
        <div class="product-img">
            <img src="/img/products/01.png" alt="img">
        </div>
        <div class="product-details ml-30 mt-20">
            <h5>Mitin Shiro</h5>
            <ul class="rating d-inline-block mr-20">
                <li><i class="las la-star"></i></li>
                <li><i class="las la-star"></i></li>
                <li><i class="las la-star"></i></li>
                <li><i class="las la-star"></i></li>
                <li><i class="las la-star"></i></li>
            </ul>
            <span>03 Customer Review</span>
            <div class="price pt-15 pb-10">
                <span>$42.00</span>
            </div>
            <p class="pr-110">Sed id interdum urna. Nam ac elit a ante commodo tristique. tum vehicula a
                hendrerit ac
                nisi. hendrerit
                ac nisi Lorem ipsum dolor sit perdiet nibh vel magna lacinia ultrices. Sed id interdum urna.
            </p>
            <div class="product-color pt-10 d-flex">
                <h6>SELECT COLOR</h6>
                <div class="color-code pl-20">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="product-size d-flex pt-10">
                <h6>SELECT SIZE</h6>
                <ul class="ml-50">
                    <li class="active">Xl </li>
                    <li>L</li>
                    <li>M</li>
                    <li>S</li>
                    <li>XS</li>
                </ul>
            </div>
            <div class="product-count d-flex mt-25 mb-30">
                <div class="quty mr-20">
                    <input class="qty" type="number" value="1">
                </div>
                <div class="add-to-cart mr-20 mt-15 mt-sm-0">
                    <button class="p-btn position-relative"  >
                        <span>Add to cart</span>
                    </button>
                </div>
                <ul class="share d-flex align-items-center mt-15 mt-sm-0">
                    <li><a href=""><i class="las la-heart"></i></a></li>
                    <li><a href=""><i class="las la-random"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- new arrival area ends -->
<!-- Today Deal Area Start -->
<div class="today-deal pt-115">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                <div class="deal-details pt-90">
                    <span>Today's Deal</span>
                    <h2>Wooden Candle Holder</h2>
                    <div class="price">
                        <del class="mr-5">$142.00</del>
                        <span>$132.00</span>
                    </div>
                    <p class="pr-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                    <div id="countdown" class="d-flex pb-40">
                        <div class="cd-box d-flex">
                            <div class="d-inline-block">
                                <span class="numbers days">00</span>
                                <span class="strings timeRefDays">Days</span>
                            </div>
                            <span class="colon ml-20 mr-20 mt-15">:</span>
                        </div>
                        <div class="cd-box d-flex">
                            <div>
                                <span class="numbers hours">00</span>
                                <span class="strings timeRefHours">Hours</span>
                            </div>
                            <span class="colon ml-20 mr-20 mt-15">:</span>
                        </div>
                        <div class="cd-box d-flex">
                            <div>
                                <span class="numbers minutes">00</span>
                                <span class="strings timeRefMinutes">Mins</span>
                            </div>
                            <span class="colon ml-20 mr-20 mt-15">:</span>
                        </div>
                        <div class="cd-box">
                            <div>
                                <span class="numbers seconds">00</span>
                                <span class="strings timeRefSeconds">Secs</span>
                            </div>
                        </div>

                    </div>
                    <a class="p-btn position-relative" href="">
                        <span>Load more</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                <div class="today-deal-img deal-img-position  text-center position-relative">
                    <img src="/img/deals/01.png" alt="product">
                    <span class="deal-badge slider-price-badge">
              <span>20%
                Discount</span>
            </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Today Deal Area Ends -->
<!-- News Area Start -->
<div class="news-area pt-115">
    <div class="container">
        <div class="section-title text-center pb-45">
            <h2 class="text-uppercase">LATEST Blog</h2>
        </div>
        <div class="row">
          @foreach(\App\Models\Blog::lastN(3) as $blog)
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="news-items mb-30 mb-md-0">
                    <div class="news-img">
                        <a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" alt="{{$blog->title}}" height="305px"></a>
                    </div>
                    <div class="news-details pt-20">
                        <div class="news-title pr-50">
                            <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                        </div>
                        <span class="d-block">{{$blog->created_at->diffForHumans()}} By Admin</span>
                        <a class="slider-btn d-inline-block position-relative mt-10" href="/blog/{{$blog->slug}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- News Area Ends  -->

<!-- Subscribe Area Starts -->

<div class="subscribe-area pt-115">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-title ">
                    <h2 class="text-uppercase">stay connected</h2>
                </div>
                <p class="pr-120">Subscribe to our newsleter and stay up to date with
                    latest offers and upcoming trends.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form class="subscribe-form mt-40" action="#">
                    <input type="email" placeholder="Email Address">
                    <i class="las la-envelope"></i>
                    <button>SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scribe Area Ends -->

<!-- Instagram Area Starts -->
<div class="instagram-area pt-110 pb-120">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="text-uppercase">Instagram shop</h2>
            <span>@mize_insta</span>
        </div>
        <div class="instagram-images d-flex pt-60">
            @foreach(\App\Models\ItemPhoto::all()->take(4) as $image)
            <div class="insta-imgs position-relative">
                <img src="{{$image->thumb}}"  alt="{{$image->alt}}">
                <a href="#"><i class="lab la-instagram"></i></a>
            </div>
            @endforeach


        </div>
    </div>
</div>

<!-- Instagram Area Ends -->
@include('components.footer')




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
</body>

</html>
