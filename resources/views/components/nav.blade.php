
<!-- Nav Chart Updated -->
<nav id="cd-lateral-nav">
    <div class="cd-navigation">
        <div class="inside-cart">
            <div class="position-center-center">
                <h5>Shopping Cart</h5>
                <ul>

                    @foreach(\App\Models\Cart::myCart() as $cart)
                    <li>
                        <div class="media-left">
                            <div class="cart-img">
                                <a href="#">
                                    <img class="media-object img-responsive" src="{{$cart['photo']}}" alt="{{$cart['name']}}">
                                </a>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">{{$cart['name']}} </h6>
                            <span class="price">{{$cart['price']}} $USD</span> <br>
                            <span class="qty">QTY: {{$cart['quantity']}}</span> </div>
                    </li>
                    @endforeach

                </ul>
                <a href="/mycart" class="btn">VIEW CART</a>
                <a href="/checkout" class="btn">CHECK OUT</a> </div>
        </div>
    </div>
</nav>
