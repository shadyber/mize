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
                <p> Shpping Fee : <b>{{\App\Models\ShippingMethod::find(app('request')->input('shipping_method_id') )->name}}   $ {{\App\Models\ShippingMethod::find(app('request')->input('shipping_method_id') )->price}}
                    </b> </p>

                   <hr>

    <h3> Grand Total: {{\App\Models\Cart::totalCart() + \App\Models\ShippingMethod::find(app('request')->input('shipping_method_id'))->price }}</h3>
                   <hr>
                   <hr>
                   <div class="accordion" id="accordionExample">
                       <div class="card">
                           <div class="card-header" id="headingOne">
                               <h2 class="mb-0">
                                   <button class="btn btn-outline-info btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Debit / Credit Card
                                   </button>

                               </h2>
                           </div>

                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                               <div class="card-body">
                                   <p>Powerd by Bank of Abysinya </p>
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
                                     Cash On Pickup
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


                                <h4>Place Your Order to Own The Cart</h4>
                                   <form action="/bankpayment" method="post">
                                       @csrf
                                       <div class="form-group row">
                                           <label for="name">Full Name</label>
                                           <input type="text" class="form-control" name="name" required>

                                       </div>

                                       <div class="form-group row">
                                           <label for="name">Email Address</label>
                                           <input type="email" class="form-control" name="email" required >

                                       </div>

                                       <div class="form-group row">
                                           <label for="name">Phone Number</label>
                                           <input type="tel" class="form-control" name="tel" required >

                                       </div>
                                    <div class="form-group row">
                                           <label for="name">Select Bank </label>
                                           <select class="form-control" name="bank_account_id" required >
                                               <option value="1">Abysiniya Bank </option>
                                               <option value="2">Commercial Bank </option>
                                               <option value="3">Hibret Bank </option>
                                               <option value="4">Awash Bank </option>
                                           </select>

                                       </div>
                                       <input type="hidden" name="shipping_method_id" value="{{app('request')->input('shipping_method_id')}}">

                                       <input type="hidden" name="amount" value="{{\App\Models\Cart::totalCart() + \App\Models\ShippingMethod::find(app('request')->input('shipping_method_id'))->price }}">
                                       <div class="form-group row">

                                           <button type="submit" class="form-control btn btn-info"  >$USD ({{\App\Models\Cart::totalCart() + \App\Models\ShippingMethod::find(app('request')->input('shipping_method_id'))->price }}) Place Order</button>

                                       </div>


                                   </form>


                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header" id="headingFour">
                               <h2 class="mb-0">
                                   <button class="btn btn-outline-info btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     Stripe Payment
                                   </button>
                               </h2>
                           </div>
                           <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                               <div class="card-body">


                                               <div class="panel-body">

                                                   @if (Session::has('success'))
                                                       <div class="alert alert-success text-center">
                                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                           <p>{{ Session::get('success') }}</p>
                                                       </div>
                                                   @endif

                                                   <form
                                                       role="form"
                                                       action="{{ route('stripe.post') }}"
                                                       method="post"
                                                       class="require-validation"
                                                       data-cc-on-file="false"
                                                       data-stripe-publishable-key="{{env('STRIPE_KEY')}}"
                                                       id="payment-form">
                                                       @csrf

                                                       <input type="hidden" name="shipping_method_id" value="{{app('request')->input('shipping_method_id')}}">
                                                       <input type="hidden" name="shipping_info_id" value="" id="selected_shipping_info_id">

                                                       <div class='form-row row'>
                                                           <div class='col-xs-12 form-group required'>
                                                               <label class='control-label'>Name on Card</label>
                                                               <input
                                                                    class='form-control' size='20' type='text'>
                                                           </div>
                                                       </div>

                                                       <div class='form-row row'>
                                                           <div class='col-xs-12 form-group card required'>
                                                               <label class='control-label'>Card Number</label> <input
                                                                   autocomplete='off' class='form-control card-number' size='20'
                                                                   type='text'>
                                                           </div>
                                                       </div>

                                                       <div class='form-row row'>
                                                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                               <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                                               class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                                                               type='text'>
                                                           </div>
                                                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                               <label class='control-label'>Expiration Month</label> <input
                                                                   class='form-control card-expiry-month' placeholder='MM' size='2'
                                                                   type='text'>
                                                           </div>
                                                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                               <label class='control-label'>Expiration Year</label> <input
                                                                   class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                                   type='text'>
                                                           </div>
                                                       </div>

                                                       <div class='form-row row'>
                                                           <div class='col-md-12 error form-group hide'>
                                                               <div class='alert-danger alert'>Please correct the errors and try
                                                                   again.</div>
                                                           </div>
                                                       </div>

                                                       <div class="row">
                                                           <div class="col-xs-12">
                                                               <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ({{\App\Models\Cart::totalCart() + \App\Models\ShippingMethod::find(app('request')->input('shipping_method_id'))->price }})</button>
                                                           </div>
                                                       </div>

                                                   </form>
                                               </div>


                               </div>
                           </div>
                       </div>
                   </div>



               </div>







            </div>
                </form>
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
            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

            <script type="text/javascript">
                $(function() {

                    var $form         = $(".require-validation");

                    $('form.require-validation').bind('submit', function(e) {
                        var $form         = $(".require-validation"),
                            inputSelector = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'].join(', '),
                            $inputs       = $form.find('.required').find(inputSelector),
                            $errorMessage = $form.find('div.error'),
                            valid         = true;
                        $errorMessage.addClass('hide');

                        $('.has-error').removeClass('has-error');
                        $inputs.each(function(i, el) {
                            var $input = $(el);
                            if ($input.val() === '') {
                                $input.parent().addClass('has-error');
                                $errorMessage.removeClass('hide');
                                e.preventDefault();
                            }
                        });

                        if (!$form.data('cc-on-file')) {
                            e.preventDefault();
                            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                            Stripe.createToken({
                                number: $('.card-number').val(),
                                cvc: $('.card-cvc').val(),
                                exp_month: $('.card-expiry-month').val(),
                                exp_year: $('.card-expiry-year').val()
                            }, stripeResponseHandler);
                        }

                    });

                    function stripeResponseHandler(status, response) {
                        if (response.error) {
                            $('.error')
                                .removeClass('hide')
                                .find('.alert')
                                .text(response.error.message);
                        } else {
                            /* token contains id, last4, and card type */
                            var token = response['id'];

                            $form.find('input[type=text]').empty();
                            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                            $form.get(0).submit();
                        }
                    }

                });
            </script>
@endsection
