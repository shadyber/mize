@extends('layouts.app')
@section('title','My Order')
@section('sub_title','Status')
@section('content')

    <div class="row">

        @foreach($orders as $order)


            <div class="card col-md-4 offset-1" >
                <img src="/assets/images/icons/{{$order->status}}.png" class="card-img-top" alt="...">
                <div class="card-body {{($order->status == 'sent') ? 'bg-info' : 'bg-succuss'}}">
                    <h5 class="card-title">Order_{{$order->id}} </h5>

                    <p class="card-text">Payment: <span class="label badge-info"><b>  {{$order->payment->payment_status}}</b></span> </p>
                </div>
                <ul class="list-group list-group-flush">

                    @foreach($cart_item=json_decode($order->cart) as $cart)

                        <li class="">
                            <a href="/item/{{$cart->slug}}" class="">{{$cart->name}}</a>  X {{$cart->quantity}}
                        </li>
                    @endforeach

                </ul>
                <div class="card-body">
                    {{$order->created_at->diffForHumans()}}
                </div>
            </div>

        @endforeach
    </div>
@endsection
