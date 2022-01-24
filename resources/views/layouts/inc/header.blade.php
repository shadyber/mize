<!-- header area starts -->
<header>
    <div class="header-1 pt-35 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-7 order-md-2 order-lg-1">
                    <div class="logo text-md-center text-lg-left">
                        <a href="/"><img src="/img/logo/logo.png" alt="mize-logo"></a>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-3 order-md-1 offset-sm-2 offset-md-0 order-lg-2 col-sm-auto">
                    <nav>
                        <div id="mobile-menu" class="main-menu">
                            <ul>
                                <li>
                                    <a href="/">Home</a>

                                </li>
                                <li>
                                    <a href="/item">Shop</a>

                                    <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                        <li><a href="/item">All Items</a></li>
                                        @foreach(\App\Models\ItemCategory::allCategories() as $itemcategory)
                                            <li><a href="/cat/{{$itemcategory->id}}">{{$itemcategory->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>

                                    <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                        <li><a href="/blog">All Blogs</a></li>
                                    @foreach(\App\Models\BlogCategory::allCategories() as $blogcategory)
                                        <li><a href="/blogcategory/{{$blogcategory->slug}}">{{$blogcategory->title}}</a></li>
                                    @endforeach
                                    </ul>
                                </li>


                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/about">About Us</a></li>


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
                        </div>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-5 order-md-3 order-lg-3 ">
                    <div class="nav-icons">
                        <ul>
                            <li>
                                <div class="search position-relative">
                                    <span ><i class="fas fa-search"></i></span>
                                    <div class="search-overlap">
                                    </div>
                                    <form action="/search" method="get" class="search-form position-fixed">
                                        <div class="search-input">
                                            <div class="search-close">
                                                <span>X</span>
                                            </div>
                                            <input type="text" name="key" placeholder="Enter your keywords.....">
                                        </div>
                                    </form>
                                </div>
                            </li>




                            <li><a href="/home"><i class="fas fa-user"></i>
                                 </a></li>
                            <li class="position-relative"><span class="product-cart"><i class="fas fa-shopping-cart"></i></span>
                                <span class="badge badge-pink " id="cartCount">{{\Illuminate\Support\Facades\Session::get('cart')? count(\Illuminate\Support\Facades\Session::get('cart')) : '0'}}</span>

                                <div class="product-on-sale pb-30">
                                    <div class="product-close-icon">
                                        <span>X</span>
                                    </div>
                                    @foreach(\App\Models\Cart::myCart() as $cart)
                                    <div class="product-wrapper d-flex">
                                        <div class="product-img position-relative ">
                                            <img  src="{{$cart['thumb']}}"   alt="{{$cart['name']}}" width="65px" height="55px">
                                            <div class="cart-icon">
                                                <a href="/item/{{$cart['slug']}}"><i class="las la-cart-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-details mt-10">

                                            <h6><a href="/item/{{$cart['slug']}}">{{$cart['name']}}</a></h6>
                                            <div class="price d-flex">
                                                <span>${{$cart['price']}} x {{$cart['quantity']}}</span>

                                            </div>
                                        </div>
                                    </div>
                                        @endforeach

                                    <div class="cart-price pr-20 pt-30">

                                        <p>Total: <span>$ {{\App\Models\Cart::totalCart()}}</span></p>
                                    </div>
                                    <div class="cart-button mt-20 pl-15">
                                        <a  href="/mycart">View Cart</a>
                                        <a  href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>
<!-- header area ends -->
