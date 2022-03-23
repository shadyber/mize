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
                                                        <img src="{{$photo->thumb}}" alt="shop-single">
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
                                        {{\App\Models\Review::average($item->id)}}
                                        <i class="far fa-star @if(\App\Models\Review::average($item->id)>=1) text-black @endif"></i>
                                        <i class="far fa-star  @if(\App\Models\Review::average($item->id)>=2) text-black @endif"></i>
                                        <i class="far fa-star  @if(\App\Models\Review::average($item->id)>=3) text-black @endif"></i>
                                        <i class="far fa-star  @if(\App\Models\Review::average($item->id)>=4) text-black @endif"></i>
                                        <i class="far fa-star @if(\App\Models\Review::average($item->id)>=5) text-black @endif"></i>
                                        ({{count($item->Reviews)}} review)
                                    </p>
                                    <h4>
                                        $ {{$item->price}}
                                    </h4>
                                    <h5>
                                        {!!  substr($item->name,0,256)!!}
                                    </h5>
                                    <p>
                                        {!!  substr($item->detail,0,300)!!} ...
                                    </p>
                                    <form>


                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <div class="discount-code">

                                        </div>
                                        <a class="btn btn-outline-primary cart-button add-to-cart" itemid="{{$item->id}}" qnt="1">Add To Cart</a>
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
                                                    <i class="far  fa-star @if($review->stars>=1)text-black @endif"></i>
                                                    <i class="far fa-star @if($review->stars>=2)text-black @endif" ></i>
                                                    <i class="far fa-star @if($review->stars>=3)text-black @endif"></i>
                                                    <i class="far fa-star @if($review->stars>=4)text-black @endif"></i>
                                                    <i class="far fa-star @if($review->stars>=5)text-black @endif"></i>
                                                     {{$review->stars}}
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                {{$review->comment}}
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
                                                <input type="text" name="name" placeholder="Full Name" readonly value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->name : 'login to review'}}">
                                                <input type="hidden" name="item_id" value="{{$item->id}}">

                                            </div>
                                            <div class="col-md-4 col-12">
                                                <input type="text" name="email" placeholder="Email Adress" required readonly value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->email : 'login to review'}}">
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="rating">
                                                    <input type="hidden" name="stars" value="5" id="ratingstar">
                                                    <span class="rating-title">Your Rating : (<b id="ratingstarv">0 </b>) </span>

                                                    <i class="far fa-star" onclick="setstar(1)"></i>
                                                            <i class="far fa-star" onclick="setstar(2)"></i>
                                                                <i class="far fa-star" onclick="setstar(3)"></i>
                                                                    <i class="far fa-star" onclick="setstar(4)"></i>
                                                                    <i class="far fa-star" onclick="setstar(5)">

                                                                    </i>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <textarea rows="8" placeholder="Type Here Message" name="comment"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="defult-btn" type="submit">Submit Review</button>
                                            </div>
                                        </form>
                                        @guest
                                        <div class="col-12">
                                            <a href="/login" class="btn btn-outline-danger btn-lg" type="submit">Login or Register to Review</a>
                                        </div>
                                        @endguest

                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                    <ul>
                                        <li>Weight:  {{$item->weight}} g</li>
                                    </ul>

                                <hr>
                                {!! $item->detail !!}
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
    <script>
var star=0;
        function setstar(x){
            star=x;
            document.getElementById('ratingstar').value=x;
            document.getElementById('ratingstarv').textContent=x;
        }
    </script>
@endsection

