<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',

    ];

    public static function myCart(){
        if(session()->get('cart')){

            return session()->get('cart');
        }else {
            return [];
        }
    }

    public static function totalCart(){
        if (session()->get('cart')){
            $total=0;
            foreach(session()->get('cart') as $cart){
                $total+=($cart['quantity'] * $cart['price']);
            }
            return $total;
        }else{
            return 0;
        }
    }
}
