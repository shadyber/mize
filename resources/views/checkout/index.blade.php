@extends('layouts.app')
@section('title','Checkout')
@section('sub_title','Select Option')
@section('content')
    <div class="shop-cart padding-tb">
        <div class="container">
            <div class="section-wrapper mb-15">
                <form action="/checkout" method="post" >
          <div class="row shipping_box">

              <div class="col-md-6">
                  <h3>Shipping Address</h3>
                  @Auth
                       @foreach( \Illuminate\Support\Facades\Auth::user()->ShippinInfo as $address)
                              <div class="box card p-3 m-5">
                                  <div class="card-header"> {{$address->country_code}} : {{$address->city}} </div>
                                  <div class="card-body">
                                    ST: {{$address->street_address}}<br>
                                    POB: {{$address->postal_code}}<br>
                                    Tel: {{$address->phone}}<br>
                                  </div>
                                  <div class="card-footer">

                                    <input type="radio" class="checkbox checkbox-" name="shpping_info_id" value="{{$address->id}}"> <span class="ui-checkboxradio-label">Use This Address </span>
                                  </div>
                              </div>
                          @endforeach
                           <div class="box card pb-50 m-5">
                               <div class="card-header"> Create New Shpping Address</div>
                               <div class="card-body">
                                   <a href="/home" class="btn btn-lg btn-block btn-outline-info"> <span class="icofont-plus "></a></span>
                               </div>

                           </div>




                  @endauth
              </div>

               <div class="col-md-6">


                           <h4>Your Order</h4>

<table width="100%">
                           @foreach(\App\Models\Cart::myCart() as $cart)
        <tr >
            <td class="pl-20"> {{$cart['name']}}</td>
             <td> $ {{$cart['price']}} x {{$cart['quantity']}} </td>
            <td class="pl-20"> ${{ $cart['price']* $cart['quantity'] }} </td>

        </tr>
                   @endforeach

                   </table>
                   <a href="/mycart" class="btn btn-outline-info"> Update Cart and Shpping method </a>
                   <hr>
                <p> Shpping Fee : <b>{{\App\Models\ShippingMethod::find(app('request')->input('shpping_method_id') )->name}}   $ {{\App\Models\ShippingMethod::find(app('request')->input('shpping_method_id') )->price}}
                    </b> </p>

                   <hr>

    <h3> Grand Total: {{\App\Models\Cart::totalCart() + \App\Models\ShippingMethod::find(app('request')->input('shpping_method_id') )->price }}</h3>
                   <hr>
                   <hr>
                   <div class="accordion" id="accordionExample">
                       <div class="card">
                           <div class="card-header" id="headingOne">
                               <h2 class="mb-0">
                                   <button class="btn btn-outline-info btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Card
                                   </button>
                               </h2>
                           </div>

                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                               <div class="card-body">
                                   <form action="/boa" method="post">
                                       @csrf

                                       <div class="col-md-12 form-group" >
                                           <input type="text" class="form-control" name="card_number" placeholder="Card Number">
                                       </div>

                                       <div class="col-md-12 form-group" >
                                           <input type="text" class="form-control" name="ccv_number" placeholder="CCV">
                                       </div>

<div class="col-md-12 row">

    <div class="col-md-6 form-group" >
        <input type="text" class="form-control" name="exp_month" placeholder="Mon">
    </div>
    <div class="col-md-6 form-group" >
        <input type="text" class="form-control" name="exp_year" placeholder="Year">
    </div>
</div>

<div class="col-md-12 form-group">

    <button type="submit" class="btn btn-primary btn-block btn-lg"> Place Order</button>
</div>
                                   </form>

                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header" id="headingTwo">
                               <h2 class="mb-0">
                                   <button class="btn btn-outline-info btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     Cash On Delivery
                                   </button>
                               </h2>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                               <div class="card-body">
                                 <p>Customer Address</p>

                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header" id="headingThree">
                               <h2 class="mb-0">
                                   <button class="btn btn-outline-info btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Direct Bank Transfer
                                   </button>
                               </h2>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                               <div class="card-body">


                                   <p>Bank Informations</p>
                                   <p>Other Bank Informations</p>

                               </div>
                           </div>
                       </div>
                   </div>



               </div>







            </div>
                </form>
        </div>
    </div>
@endsection
