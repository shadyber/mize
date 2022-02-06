<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
USE App\Models\ShippingMethod;
USE App\Models\Order;
USE App\Models\Payment;
use Session;
use Stripe;
use Auth;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $charge=Stripe\Charge::create ([
                "amount" =>(Cart::totalCart()+ ShippingMethod::findorFail($request->input('shipping_method_id'))->price) * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Cart Detail : ".json_encode(Cart::myCart())
        ]);


//save payment information to database
 //protected $fillable=['payment_id','payer_id','payer_email','amount','currency','payment_status','user_id'];

$payment=Payment::create([
'payment_id'=>$charge->id,
'payer_id'=>Auth()->user()->id,
'payer_email'=>Auth()->user()->email,
'amount'=>$charge->amount,
'currency'=>$charge->currency,
'payment_status'=>$charge->status,
'user_id'=>Auth::user()->id
]);
//save order to database



    //protected $fillable = ['cart','shipping_info_id','payment_id','status','created','user_id'];
 $order=Order::create([
'cart'=>json_encode(Cart::myCart()),
'shipping_info_id'=>$request->input('shipping_info_id'),
'shipping_method_id'=>$request->input('shipping_method_id'),
'payment_id'=>$payment->id,
'status'=>'created',
'user_id'=>Auth::user()->id
 ]);
        return view('stripe.success')->with(['success'=>'Payment successful!','charge'=>$charge]);
    }
    }
