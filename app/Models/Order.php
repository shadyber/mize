<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function address(){
        return $this->hasOne(ShippingInfo::class,'id');
    }


    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    public function payment(){
        return $this->hasOne(Payment::class,'id','payment_id');
    }

    public static function pendingOrders(){
        return Order::where('status','LIKE','created')->get();
    }
    public static function ordersByDate($start , $end){
        return Order::where('created_at','>=',$start)
            ->where('created_at','<=',$end)
            ->get();
    }
}
