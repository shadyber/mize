
<!-- Mobile Menu Start Here -->
<div class="mobile-menu transparent-header">
    <nav class="mobile-header">
        <div class="header-logo">
            <a href="/l"><img src="/assets/images/logo/01.png" alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="mobile-menu">
        <div class="mobile-menu-area">
            <div class="mobile-menu-area-inner">
                <ul class="lab-ul">
                    <li>
                        <a href="">Home</a>

                    </li>
                    <li><a href="/about">About</a></li>

                    <li>
                        <a href="/blog">Blog</a>

                    </li>
                    <li class="active">
                        <a href="/item">Shop</a>

                    </li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Mobile Menu Endin♠g Here -->

<!-- desktop menu start here -->
<header class="header-section">
    <div class="header-top">
        <div class="container  justify-content-center align-items-center bp-0">
            <div class="row">
                <div class="col-md-4 col-md-4">
                    <div class="logo py-2">
                        <a href="/"><img src="/assets/images/logo/01.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-8 col-md-8">
                    <div class="ht-left">
                        <ul class="lab-ul d-flex flex-wrap justify-content-center">
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="/assets/images/header/01.png" alt="address">
                                </div>
                                <div class="ht-add-content">
                                    <span>Address Line</span>
                                    <span class="d-block text-bold">{{\App\Models\Address::all()->last()->address1}}</span>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="/assets/images/header/02.png" alt="email">
                                </div>
                                <div class="ht-add-content">
                                    <span>Send Mail </span>
                                    <span class="d-block text-bold"><a href="mailto:{{\App\Models\Address::all()->last()->email}}">{{\App\Models\Address::all()->last()->email}}</a></span>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="/assets/images/header/03.png" alt="call">
                                </div>
                                <div class="ht-add-content">
                                    <span>Make Call </span>
                                    <span class="d-block text-bold"><a href="tel:{{\App\Models\Address::all()->last()->tel}}">{{\App\Models\Address::all()->last()->tel}}</a></span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom bg-theme">
        <div class="header-area">
            <div class="container">
                <div class="primary-menu">
                    <div class="main-area w-100">
                        <div class="main-menu d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="logo">
                                <a href="/"><img src="/assets/images/logo/02.png" alt="logo"></a>
                            </div>
                            <ul class="lab-ul">
                                <li>
                                    <a href="/">Home</a>

                                </li>
                                <li><a href="/about">About</a></li>

                                <li>
                                    <a href="/blog">Blog</a>
                                    <ul class="lab-ul">
                                        <li><a href="/blog">All Blog</a></li>
                                        @foreach(\App\Models\BlogCategory::allCategories() as $cat)
                                        <li><a href="/blogcategory/{{$cat->id}}">{{$cat->title}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <a href="/item">Shop</a>
                                    <ul class="lab-ul">
                                        @foreach(\App\Models\ItemCategory::allCategories() as $cat)
                                        <li><a href="/cat/{{$cat->id}}" class="active">{{$cat->title}}</a>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <a href="/gallery">Gallery</a>

                                </li>

                                <li><a href="/contact">Contact</a></li>
                                <li>

                                    <a  href="#" >
                                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    </a>
                                    <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                        @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <li> <a  href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                            <ul class="lab-ul search-cart">
                                 <li>
                                    <div class="cart-option">
                                        <i class="icofont-cart-alt"></i>
                                        <span >0</span>
                                        <div class="cart-content">
                                            @foreach(\App\Models\Cart::myCart() as $cart)
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="#"><img src="/assets/images/products/product/01.png"
                                                                     alt="cart"></a>
                                                </div>
                                                <div class="cart-des">
                                                    <a href="#">{{$cart['title']}}</a>
                                                    <p>${{$cart['price']}}</p>
                                                </div>
                                                <div class="cart-btn">
                                                    <a href="#"><i class="icofont-close-circled"></i></a>
                                                </div>
                                            </div>
                                                @endforeach

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search-option">
                                        <i class="icofont-search-2"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->
