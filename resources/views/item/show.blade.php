@extends('layouts.app')
@section('title',$item->title)
@section('content')
    <div class="shop-details pt-120 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-12">
                    <div class="nav nav-tabs " id="approach-tabs" role="tablist">

                        <a class="product-thumb mb-15 active" id="nav-thumb1" data-toggle="tab" href="#nav-product1" role="tab" aria-controls="nav-product1" aria-selected="true">
                            <img src="{{$item->thumb}}" width="70px" height="90px" alt="img">
                        </a>

                        @foreach($item->ItemPhoto as $itemphoto)

                        <a class="product-thumb mb-15" id="nav-thum2" data-toggle="tab" href="#nav-product2" role="tab" aria-controls="nav-product2" aria-selected="false">
                            <img src="{{$itemphoto->thumb}}" alt="img"  width="70px" height="90px"></a>
                       @endforeach

                    </div>
                </div>
                <div class="col-xl-11 col-lg-11 col-md-10 col-sm-12">
                    <div class="product-wrapper d-flex">
                        <div class="product-imges tab-content" id="nav-tabContents">
                            <div class="tab-pane product-img  active " id="nav-product1" role="tabpanel" aria-labelledby="nav-thumb1">
                                <img src="{{$item->photo}}" alt="img" width="350px">
                            </div>
                            @foreach($item->ItemPhoto as $itemphoto)
                            <div class="tab-pane product-img " id="nav-product2" role="tabpanel" aria-labelledby="nav-thum2">
                                <img src="{{$itemphoto->photo}}" alt="img"  width="350px">
                            </div>
                            @endforeach

                        </div>
                        <div class="product-details ml-50">
                            <h5>{{$item->title}}</h5>
                            <ul class="rating d-inline-block mr-20">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                            <span>0 Customer Review</span>
                            <div class="price pt-15 pb-10">
                                <span>$ {{$item->price}}</span>
                            </div>
                            <p class="pr-110">
                                {{$item->detail}}
                            </p>
                            <div class="product-color pt-10 d-flex">

                            </div>
                            <div class="product-size d-flex pt-10">
                                <h6>SELECT SIZE</h6>
                                <ul class="ml-50">

                                </ul>
                            </div>
                            <div class="product-count d-flex mt-25">
                                <div class="quty mr-20">
                                    <div class="nice-number"><button type="button">-</button><input class="qty" type="number" value="1" data-nice-number-initialized="true" style="width: 2ch;"><button type="button">+</button></div>
                                </div>
                                <div class="add-tocart mr-20 mt-15 mt-sm-0">
                                    <button type="submit" class="p-btn btn-block custom-height bg-dark mb-2  add-to-cart" itemid="{{$item->id}}" qnt="getquantity()">
                                        <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                                    </button>
                                </div>
                                <ul class="share d-flex align-items-center mt-15 mt-sm-0">
                                    <li><a href="my_wishlist.html"><i class="las la-heart"></i></a></li>
                                    <li><a href=""><i class="las la-random"></i></a></li>
                                </ul>
                            </div>
                            <ul class="social-icon pt-80">
                                <li><a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <hr class="pt-75">
        </div>
    </div>
@endsection
@section('js')
    <script>

        var qnt=1;
        function getqnt(){
            qnt = document.getElementById("qtybutton").value;
        }
        function getquantity(){
            return qnt;
        }


    </script>
@endsection

