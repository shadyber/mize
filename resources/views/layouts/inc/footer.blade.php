<!-- footer section start here -->
<footer>
    <div class="footer-top relative padding-tb bg-ash relative">
        <div class="shape-images">
            <img src="/assets/images/shape-img/01.png" alt="shape-images">
        </div>
        <div class="container">
            <div class="section-wrapper row">
                <div class="col-xl-3 col-md-6">
                    <div class="post-item">
                        <div class="footer-logo">
                            <img src="/assets/images/logo/01.png" alt="footer-logo">
                        </div>
 <p>    {{\App\Models\AboutUs::all()->last()->detail}}</p>

                        <ul class="footer-info">
                            <li><a class="slider-btn position-relative d-inline-block" href="/about">Terms and Conditions</a></li>

                            <li><a class="slider-btn position-relative d-inline-block" href="/privacy">Privacy policye</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/waranty">Waranty</a></li>
                            <li><a class="slider-btn position-relative d-inline-block" href="/delivery">Delivery ansd Shipping</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="post-item">
                        <div class="post-title">
                            <h5>Keep In Touch</h5>
                        </div>
                        <ul class="lab-ul footer-location">
                            <li>
                                <div class="icon-part">
                                    <i class="icofont-phone"></i>
                                </div>
                                <div class="content-part">
                                    <p>{{\App\Models\Address::all()->last()->tel}}</p>
                                    <p>{{\App\Models\Address::all()->last()->tel2}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-part">
                                    <i class="icofont-wall-clock"></i>
                                </div>
                                <div class="content-part">
                                    <p>Mon - Fri 09:00 - 18:00</p>
                                    <p>(except public holidays)</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-part">
                                    <i class="icofont-location-pin"></i>
                                </div>
                                <div class="content-part">
                                    <p>{{\App\Models\Address::all()->last()->address}}</p>
                                    <p>{{\App\Models\Address::all()->last()->address2}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="post-item">
                        <div class="post-title">
                            <h5>MizeMart Products</h5>
                        </div>
                        <div class="lab-ul footer-post">
                            @foreach(\App\Models\Item::lastN(2) as $item)
                            <div class="media mb-3">
                                <div class="fp-thumb mr-3">
                                    <img src="{{$item->thumb}}" alt="recent-post">
                                </div>
                                <div class="media-body">
                                    <a href="/item/{{$item->slug}}">
                                        <h6 class="mt-0">{{$item->name}}</h6>
                                    </a>
                                    <span class="price">${{$item->price}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="post-item">
                        <div class="post-title">
                            <h5>Photo Feed</h5>
                        </div>
                        <div class="lab-ul footer-gellary">

                            <figure class="figure">
                                <a href="/assets/images/gallery/01.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/01.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>

                            <figure class="figure">
                                <a href="/assets/images/gallery/02.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/02.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>
                            <figure class="figure">
                                <a href="/assets/images/gallery/03.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/03.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>
                            <figure class="figure">
                                <a href="/assets/images/gallery/04.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/04.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>
                            <figure class="figure">
                                <a href="/assets/images/gallery/05.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/05.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>
                            <figure class="figure">
                                <a href="/assets/images/gallery/06.jpg" data-rel="lightcase:myCollection:slideshow"><img src="/assets/images/gallery/06.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p class="text-center">&copy; 2020 <a href="/">MizeMart</a>.All Rights Reserved By <a href="https://mizemart.com" target="_blank">Mize Mart</a>
                    <a href="https://rootsystemset.com">made with ♥ by r∞t system</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer section start here -->
