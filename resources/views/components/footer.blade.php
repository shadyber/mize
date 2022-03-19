
<!-- Footer Area Starts -->
<footer class="footer-area ">
    <div class="container">
        <div class="footer-menu pt-120">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 mb-lg-0 pt-15">
                        <div class="logo pb-30">
                            <a href="/"><img src="/img/logo/logo.png" alt="img"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li>Email: <span class="ml-5">{{\App\Models\Address::all()->last()->email}}</span></li>
                                <li>Phone: <span class="ml-5">{{\App\Models\Address::all()->last()->tel}}</span></li>
                            </ul>
                            <p class="pr-65">Subscribe to our newsleter and stay
                                up to date with latest offers and
                                upcoming products.</p>
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

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>Help and Support</h4>
                        <ul class="footer-info pt-10">
                            <li><a class="slider-btn position-relative d-inline-block" href="/myorder">Track my order</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/item">Our top products</a>
                            </li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/mycart">My cart</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/login">Sign in</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6  pl-xl-0">
                    <div class="footer-widget">
                        <h4>Pages & Resources</h4>
                        <ul class="footer-info pt-10">
                            <li><a class="slider-btn position-relative d-inline-block" href="/about">About Us</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/item">Shop Page</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/cat">Category page</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/home">my profile</a></li>
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
                        <p>Copyright © 2022 | Designed by <a href="https://rootsystemset.com"
                                                             target="_blank">r∞t system</a></p>
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
                        <a class="position-relative" href="/terms">Terms of Use </a>
                        <a class="ml-40" href="/privacy">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Area Ends -->
