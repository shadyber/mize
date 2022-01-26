<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class,'id');
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
