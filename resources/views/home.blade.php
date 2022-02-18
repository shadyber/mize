@extends('layouts.app')

@section('content')

<div class="row p-2 m-4">

            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile ">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">

                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading"> {{count(Auth::user()->orders)}} </span>
                                        <span class="description">Ordres</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{Auth::user()->name}}<span class="font-weight-light">, 0 <span class="ui-icon-star"></span></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>***{{(Auth::user()->email)}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Registered {{Auth::user()->created_at->diffForHumans()}}
                            </div>
                            <hr class="my-4">
                            <p>User Reputation.</p>
                            <a href="#">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card ">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <!-- Description -->
                            <h6 class="heading-small text-muted mb-4">My Orders</h6>
                            <div class="pl-lg-4">
                                <div class="form-group focused">
                                    <label>My Orders</label>
                                    <div class="row">
                                        @foreach( \Illuminate\Support\Facades\Auth::user()->orders as $order)
                                            <div class="box card p-3 m-5 col-md-6">
                                                <div class="card-header">  {{$order->address->city}} : {{$order->address->postal_code}} </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p>Shipping Method: </p>
                                                        </div>
                                                    </div>
                                                    <ul>

                                                        @foreach($cart_item=json_decode($order->cart) as $cart)

                                                            <li class="btn btn-outline-primary pull-right"><a href="/item/{{$cart->slug}}" class="list-inline-item">{{$cart->name}}</a>  X {{$cart->quantity}}  </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="card-footer">

                                                    <span class="ui-checkboxradio-label"> Status {{$order->status}} </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>



                                </div>
                            </div>

                            <hr class="my-4">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Shipping Informations</h6>
                            <div class="row">

                                    <h3>My Shipping Address</h3>
                                    @Auth
                                        @foreach( \Illuminate\Support\Facades\Auth::user()->ShippinInfo as $address)
                                            <div class="box card p-3 m-5 col-md-4">
                                                <div class="card-header"> {{$address->country_code}} : {{$address->city}} </div>
                                                <div class="card-body">
                                                    ST: {{$address->street_address}}<br>
                                                    POB: {{$address->postal_code}}<br>
                                                    Tel: {{$address->phone}}<br>
                                                </div>
                                                <div class="card-footer">

                                                    <input type="radio" class="checkbox checkbox-" name="shpping_info_id" value="{{$address->id}}"  onclick="change(this.value);">
                                                    <span class="ui-checkboxradio-label">Use This As Primary Address </span>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="box card pb-50 m-5">
                                            <div class="card-header"> Create New Shpping Address</div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-lg btn-block btn-outline-info"  data-toggle="modal" data-target="#exampleModalCenter"> <span class="icofont-plus "></span></a>


                                            </div>

                                        </div>




                                    @endauth


                            </div>


                    </div>
                </div>
            </div>


</div>


@include('components.fronmodal')
@endsection


@section('css')

@endsection
