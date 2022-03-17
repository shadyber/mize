<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        return view('checkout.index');
    }

    public function store(Request $request)
    {

        // check shipping methods and price first.
        dd($request->input());
        // abysiniya bank api goes here.
    }
}
