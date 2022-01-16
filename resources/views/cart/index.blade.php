@extends('layouts.app')
@section('title','My Cart')
@section('content')
    <div class="wishlist-area shopping_cart shop-list pt-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col"><span>PRODUCT NAME</span></th>
                                <th scope="col"><span>UNIT PRICE </span> <span class="d-none">ALL DETAILS</span></th>
                                <th scope="col"><span>QUANTITY</span></th>
                                <th scope="col"><span>TOTAL</span></th>

                            </tr>
                            </thead>
                            <tbody>
                          @foreach(\App\Models\Cart::myCart() as $cart)
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="cart-img">
                                            <img src="{{$cart['thumb']}}" width="75px" height="82px" alt="{{$cart['name']}}">
                                        </div>
                                        <div class="product-name mt-auto mb-auto ml-30">
                                            <h6><a href="/item/{{$cart['slug']}}">{{$cart['name']}}</a></h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price ">
                                        <span>${{$cart['price']}}</span>
                                        <div class="shopping-cart-mobile-content d-none mt-10">
                                            <div class="quty">
                                                <div class="nice-number"><button type="button">-</button>
                                                    <input class="qty" type="number" value="{{$cart['quantity']}}" data-nice-number-initialized="true" style="width: 2ch;"><button type="button">+</button></div>
                                            </div>
                                            <div class="cart-button mt-20">
                                                <span>${{$cart['price']}}</span>
                                                <button class="float-right ">X</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quty">
                                        <div class="nice-number"><button type="button">-</button>
                                            <input class="qty" type="number"value="{{$cart['quantity']}}"  data-nice-number-initialized="true" style="width: 2ch;">
                                            <button type="button">+</button></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cart-button ">
                                        <span>${{$cart['price']*$cart['quantity']}}</span>
                                        <button class="float-right">X</button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                @endforeach
                                <td colspan="4">
                                    <div class="table-button">
                                        <button>CLEAR SHOPPING CART</button>
                                        <button class="ml-25">UPDATE SHOPPING CART</button>
                                        <button class="float-right">CONTINUE SHOPPING</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-50">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="coupon_discount">
                        <h6>Counpon discount</h6>
                        <p>Enter your code if you have one. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae</p>
                        <form action="#" class="coupon-form pt-25">
                            <input type="text" placeholder="Enter your code here">
                            <button class="p-btn border-0 ml-20">APPLY COUNPON</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="cart-total pt-30 pl-40 pr-30 pb-50 mt-40 mt-md-0">
                        <h6>Cart Total</h6>
                        <ul>
                            <li>Sub Total <span class="float-right">${{\App\Models\Cart::totalCart()}} </span></li>
                            <li>Grand Total <span class="float-right">${{\App\Models\Cart::totalCart()}}</span></li>

                        </ul>
                        <p class="pt-15">Checkout with Mutilple Adresses</p>
                        <form method="get" action="checkout">

                            <button type="submit" class="p-btn border-0 mt-20">PROCEED TO CHECKOUT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
