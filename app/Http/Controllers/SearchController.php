<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request  $request){

        $result=Item::where('name','LIKE',"%$request->key%")
            ->orWhere('detail' , 'LIKE',"%$request->key")
            ->orWhere('tags','LIKE',"%$request->key")
            ->get();

        return view('search')->with(['result'=>$result,'key'=>$request
            ->key]);



    }
}
