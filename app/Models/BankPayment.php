<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
    use HasFactory;
    protected $fillable=[
   'email','tel','name','amount','currency','cart','bank_account_id','shipping_method_id','user_id','status'  ];
}
