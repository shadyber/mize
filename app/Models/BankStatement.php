<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankStatement extends Model
{
    use HasFactory;
    protected $fillable=['bank_name','amount','currency_id','date','reference_number','sender_account','merchant_account','status','user_id'
                            ];



    public function user() {
        return $this->belongsTo(User::class,'id');
    }


    public function Currency(){
        return $this->belongsTo(Currency::class,'id');
    }


}
