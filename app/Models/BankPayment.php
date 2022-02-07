<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
    use HasFactory;
    protected $fillable=[
   'email','tel','name','amount','currency_id','cart','bank_account_id','shipping_method_id','user_id','status'  ];




    public function user() {
        return $this->belongsTo(User::class,'id');
    }


    public function Currency(){
        return $this->belongsTo(Currency::class,'id');
    }

}
