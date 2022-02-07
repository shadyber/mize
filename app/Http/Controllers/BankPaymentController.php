<?php

namespace App\Http\Controllers;

use App\Models\BankPayment;
use App\Models\BankStatement;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Notifications\BankPaymentOrderCreatedNotification;

class BankPaymentController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


public function confirmpayment (Request $request){


  $request->validate([
                    'shipping_method_id'=>'required',
                    'bankPayment_id'=>'required',
                    'shipping_info_id'=>'required',
                    'reference_number'=>'required',
                    'bank_account_id'=>'required',
                    'amount'=>'required',
                    'currency_id'=>'required',
                                     ]);

// find if payment is finished on back end.


$bankstatment=BankStatement::where('reference_number', '=', $request->input('reference_number'))
                                 ->where('status', '=', 'created')
                                 ->get()->last();

$bankPayment=BankPayment::find($request->input('bankPayment_id'));


if(($bankPayment->Currency->usd_rate * $bankPayment->amount)!=($bankstatment->Currency->usd_rate * $bankstatment->amount)){
return redirect()->back()->with(['error','Amount Not Matched']);
}



$payment=Payment::create([
'payment_id'=>'bank_transfer'.BankPayment::find($request->input('bankPayment_id'))->id,
'payer_id'=>Auth()->user()->id,
'payer_email'=>Auth()->user()->email,
'amount'=>$bankstatment->amount,
'currency_id'=>$bankPayment->currency_id,
'payment_status'=>'created',
'user_id'=>Auth::user()->id
]);
//save order to database

// place order

 $order=Order::create([
'cart'=>BankPayment::find($request->input('bankPayment_id'))->cart,
'shipping_info_id'=>$request->input('shipping_info_id'),
'shipping_method_id'=>$request->input('shipping_method_id'),
'payment_id'=>$payment->id,
'status'=>'created',
'user_id'=>Auth::user()->id
 ]);


$bankstatment->status='completed';
$bankstatment->save();
$bankPayment=BankPayment::find($request->input('bankPayment_id'));
$bankPayment->status='completed';
$bankPayment->save();

     return view('stripe.success')->with(['success'=>'Payment successful!','charge'=>$payment]);


// convert a currency to usd.request

// if step one is ok place order and save payment to database





}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $request->validate([
                    'name'=>'required',
                    'email'=>'required',
                    'tel'=>'required',
                    'shipping_method_id'=>'required',
                    'bank_account_id'=>'required',
                    'amount'=>'required',
                                     ]);





        $paymentorder= BankPayment::create([
                'name'=>$request->input('name'),
                'amount'=>$request->input('amount'),
                'currency_id'=>1,
                'cart'=>json_encode(Cart::myCart()),
                'email'=>$request->input('email'),
                'tel'=>$request->input('tel'),
                'shipping_method_id'=>$request->input('shipping_method_id'),
                'bank_account_id'=>$request->input('bank_account_id'),
                'user_id'=>Auth::user()->id
            ]
        );


        $user=Auth::user();
        $user->notify(new BankPaymentOrderCreatedNotification($paymentorder));
        return redirect()->back()->with(['success'=>'Bank Payment Order Submited']);


    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $bankPayment=BankPayment::find($id);

       return view('bankPayment.checkout')->with(['bankPayment'=>$bankPayment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(BankPayment $bankPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankPayment $bankPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankPayment $bankPayment)
    {
        //
    }
}
