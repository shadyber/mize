<?php

namespace App\Http\Controllers;

use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store','update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shippings=ShippingInfo::all();
        return view('admin.shipping.index')->with('shippings',$shippings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $shipingifno=ShippingInfo::where('user_id',Auth::user()->id)->get()->last();

        if($shipingifno==null){
            $shipingifno=new ShippingInfo;

        }

        $shipingifno->first_name=$request->input('first_name');
        $shipingifno->last_name=$request->input('last_name');
        $shipingifno->country_code=$request->input('country_code');
        $shipingifno->city=$request->input('city');
        $shipingifno->street_address=$request->input('street_address');
        $shipingifno->line1=$request->input('line1');
        $shipingifno->postal_code=$request->input('postal_code');
        $shipingifno->business_name=$request->input('business_name');
        $shipingifno->phone=$request->input('phone');
        $shipingifno->email=$request->input('email');
        $shipingifno->user_id=Auth::user()->id;

        $shipingifno->save();


        return redirect()->back()->with('sucuss','Shipping Address Created Succusfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingInfo $shippingInfo)
    {
        //
    }
}
