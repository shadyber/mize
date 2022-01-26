@extends('layouts.app')
@section('title','Search result for '.$key)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="product-list new-arrival-2 new-arrival">
                   @foreach($result as $item)
                    <div class="product-wrapper mb-30">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="arrival-items arrival-new-items d-flex position-relative">
                                    <div class="arrival-img mt-50 ml-25 mb-50">
                                        <img src="{{$item->thumb}}" alt="bag">
                                    </div>
                                    <div class="arrival-details position-relative pt-75 ml-50">
                                        <h5><a href="/item/{{$item->slug}}">Traditional Baltina</a></h5>
                                        <ul class="rating pt-10">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                        <div class="materials pt-15">
                                            <h6>Materials: <span>Plastic Body</span></h6>
                                        </div>
                                        <div class="product-color pt-10 d-flex">
                                            <h6>Color:</h6>
                                            <div class="color-code">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="product-size d-flex pt-10">
                                            <h6>Size: </h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="buy-details text-center pt-95">
                                    <span>${{$item->price}}</span>
                                    <div class="delivery pt-15 pb-25">
                                        <span><i class="las la-luggage-cart"></i>Free delivery Ethiopia</span>
                                    </div>
                                    <div class="cart-button">
                                        <a href="#" class="add-to-cart" itemid="{{$item->id}}">Add to cart</a>
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
@endsection
