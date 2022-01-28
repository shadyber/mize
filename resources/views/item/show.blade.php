@extends('layouts.app')
@section('title',$item->title)
@section('content')


    <!-- Shop Page Section start here -->
    <section class="shop-single padding-tb">
        <div class="container">
            <div class="row justify-content-center mb-15">
                <div class="col-lg-12 col-12 sticky-widget">
                    <div class="product-details">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="product-thumb">
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="shop-item">
                                                    <div class="shop-thumb">
                                                        <img src="{{$item->photo}}"
                                                             alt="shop-single">
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach($item->ItemPhoto as $photo)
                                            <div class="swiper-slide">
                                                <div class="shop-item">
                                                    <div class="shop-thumb">
                                                        <img src="{{$photo->photo}}"
                                                             alt="shop-single">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        <div class="shop-navigation d-flex flex-wrap">
                                            <div class="shop-nav shop-slider-prev"><i class="icofont-simple-left"></i>
                                            </div>
                                            <div class="shop-nav shop-slider-next"><i class="icofont-simple-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="shop-item">
                                                    <div class="shop-thumb">
                                                        <img src="{{$item->thumb}}" alt="shop-single">
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach($item->ItemPhoto as $photo)
                                            <div class="swiper-slide">
                                                <div class="shop-item">
                                                    <div class="shop-thumb">
                                                        <img src="/{{$photo->thumb}}" alt="shop-single">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="post-content">
                                    <h4>{{$item->title}}</h4>
                                    <p class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        (3 review)
                                    </p>
                                    <h4>
                                        $ {{$item->price}}
                                    </h4>
                                    <h5>
                                        Product Description
                                    </h5>
                                    <p>
                                     {{$item->detail}}
                                    </p>
                                    <form>


                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <div class="discount-code">

                                        </div>
                                        <button type="submit">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <ul class="agri-ul review-nav">
                            <li class="desc" data-target="description-show">Description</li>
                            <li class="rev active" data-target="review-content-show">Reviews {{count($item->Reviews)}}</li>
                        </ul>
                        <div class="review-content review-content-show">
                            <div class="review-showing">
                                <ul class="agri-ul content">
                                   @foreach($item->Reviews as $review)
                                    <li>
                                        <div class="post-thumb">
                                            <img src="{{$review->User->avatar}}" alt="{{$review->User->name}}">
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <div class="posted-on">
                                                    <a href="#">{{$review->User->name}}</a>
                                                    <p>Posted {{$review->created_at->diffForHumans()}}</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                     {{$review->stars}}
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p{{$review->comment}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                                <div class="client-review">
                                    <div class="review-form">
                                        <div class="review-title">
                                            <h5>Add a Review</h5>
                                        </div>
                                        <form action="/review" method="post" class="row" @if(!\Illuminate\Support\Facades\Auth::user()) style="display: none" @endif >
                                            @csrf
                                            <div class="col-md-4 col-12">
                                                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->id : 0}}">
                                                <input type="text" name="name" placeholder="Full Name" value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->name : 'login to review'}}">
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <input type="text" name="email" placeholder="Email Adress" value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->email : 'login to review'}}">
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="rating">
                                                    <input type="hidden" name="stars" value="5" id="ratingstar">
                                                    <span class="rating-title">Your Rating : </span>
                                                    <div class="rating">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <textarea rows="8" placeholder="Type Here Message" name="comment"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="defult-btn" type="submit">Submit Review</button>
                                            </div>
                                        </form>

                                        <div class="col-12">
                                            <a href="/login" class="btn btn-outline-danger" type="submit">Login or Register to Review</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="description">

                                {{$item->detail}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Page Section ending here -->
@endsection
@section('js')

@endsection

