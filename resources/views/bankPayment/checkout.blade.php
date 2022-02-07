@extends('layouts.app')
@section('title','Checkout')
@section('sub_title','Select Option')
@section('content')
    <div class="shop-cart padding-tb">
        <div class="container">
            <div class="section-wrapper mb-15">

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

                                            <input type="radio" class="checkbox checkbox-" name="shpping_info_id" value="{{$address->id}}"  onclick="change(this.value);">
                                            <span class="ui-checkboxradio-label">Use This Address </span>
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

                        <div class="col-md-6">

                            <form action="/confirmbankpayment" method="post">
                                @csrf
                                <input type="hidden" name="shipping_method_id" value="{{$bankPayment->shipping_method_id}}">
                                <input type="hidden" name="bankPayment_id" value="{{$bankPayment->id}}">
                                <input type="hidden" name="shipping_info_id" value="" id="selected_shipping_info_id">


                                <div class="form-group row">
                                    <label for="reference_number">Bank Reference Number</label>
                                    <input type="text" class="form-control" name="reference_number">
                                </div>

                                <div class="form-group row">
                                    <label for="bank_account_id">Bank Name</label>
                                    <input type="text" class="form-control" name="bank_account_id" value="{{$bankPayment->bank_account_id}}">
                                    @error('bank_account_id')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" name="amount">
                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="currency_id">Currency</label>
                                    <select class="form-control" name="currency_id">
                                    @foreach(\App\Models\Currency::all() as $currency)

                                            <option value="{{$currency->id}}">{{$currency->slug}} {{$currency->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                 <div class="form-group row">

                                     <button type="submit" class="form-control">Confirm Order</button>
                                </div>



                            </form>

                        </div>







                    </div>

            </div>
        </div>

        @include('components.fronmodal')
        @endsection
        @section('js')
            <script type="text/javascript">
                function change(v){

                    var selected_shpping_info_id=document.getElementById('selected_shipping_info_id');
                    selected_shpping_info_id.value=v;
                }
            </script>

@endsection
