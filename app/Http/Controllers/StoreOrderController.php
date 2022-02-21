<?php

namespace App\Http\Controllers;

use App\Models\StoreOrder;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StoreOrderController extends Controller
{
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

  StoreOrder::create([
                'email'=>$request->input('email')? $request->input('email') : Auth::user()->email,
                'tel'=>$request->input('tel'),
                'cart'=>json_encode(Cart::myCart()),
                'amount'=>Cart::totalCart(),
                'user_id'=>Auth::user()->id
                ]
                );

        return view('storeorder.locations')->with('message','Order submit succussfully!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function show(StoreOrder $storeOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreOrder $storeOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreOrder $storeOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreOrder $storeOrder)
    {
        //
    }
}
