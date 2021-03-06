@extends('layouts.app')
@section('title','Cart')
@section('sub_title','My Cart')
@section('content')
    <div class="shop-cart padding-tb">
        <div class="container">
            <div class="section-wrapper mb-15">
                <div class="cart-top">
                    <table>
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity </th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Cart::myCart() as $cart)
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{$cart['thumb']}}" alt="{{$cart['name']}}"></a>
                                </div>
                                <div class="p-content">
                                    <a href="/item/{{$cart['slug']}}">{{$cart['name']}}</a>
                                </div>
                            </td>
                            <td>
                                $ETB {{$cart['price']}}
                              <small> {{$cart['weight']}}gram</small>
                            </td>
                            <td>
                                <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$cart['quantity']}}">
                                    <div class="inc qtybutton">+</div>
                                    <div class="inc qtybutton">+</div></div>
                            </td>
                            <td>$ {{$cart['price'] * $cart['quantity']}}</td>
                            <td>
                                <a href="/removecart/{{$cart['id']}}"><img src="/assets/images/del.png" alt="{{$cart['name']}}"></a>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="cart-bottom">
                    <div class="cart-checkout-box">
                        <form action="/" class="coupon" style="display: none;">
                            <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                            <input type="submit" value="Apply Coupon">
                        </form>

                    </div>
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="calculate-shiping w-100">
                                    <h4>Select Shipping Method</h4>
                                   <h3> <small>Total Weight : {{$total_weight}} gram</small></h3>
                                    <div class="outline-select">
                                        <select id="shipping_method_option" onchange="selectShipping()">
                                            @foreach(\App\Models\ShippingMethod::all() as $method)
                                            <option value="{{$method->id}}" title="{{$method->price}}" price="{{$method->price}}">{{$method->name}}</option>
                                            @endforeach

                                        </select>
                                        <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="cart-overview">
                                    <h4>Cart Totals</h4>
                                    <ul>
                                        <li>
                                            <span class="pull-left">Cart Subtotal</span>
                                            <p class="pull-right">${{\App\Models\Cart::totalCart()}}</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">Shipping and Handling</span>
                                            <p class="pull-right" id="input_shipping_method_name">Free Shipping</p>
                                            <input type="hidden" name="shipping_method_id" value="1" id="input_shipping_method_id">
                                        </li>
                                        <li>
                                            <span class="pull-left">Order Total</span>
                                            <p class="pull-right">${{\App\Models\Cart::totalCart()}}</p>
                                        </li>
                                    </ul>
                                </div>

                                <form action="/checkout" method="get" class="cart-checkout">
                                     <input type="hidden" value="1" name="shipping_method_id" id="selected_shipping_method_id">
                                     <input type="hidden" value="0" name="shipping_price" id="selected_shipping_price">
                                     <input type="hidden" value="free" name="shipping_method_name" id="selected_shipping_method_name">
                                    <input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Proceed to Checkout">
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        function selectShipping (e) {
            var select = document.getElementById('shipping_method_option');
            var value = select.options[select.selectedIndex].value;
            var text = select.options[select.selectedIndex].text;
            var price = select.options[select.selectedIndex].getAttribute('price');

          //  alert(value); // en

            var selected_shipping_method_id=document.getElementById('selected_shipping_method_id');
            selected_shipping_method_id.value=value;

            var selected_shipping_price=document.getElementById('selected_shipping_price');
            selected_shipping_price.value=price;

            var selected_shipping_method_name=document.getElementById('selected_shipping_method_name');
            selected_shipping_method_name.value=text;


        }
    </script>
@endsection
