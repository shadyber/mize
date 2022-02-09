<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
protected $fillable=[
'name','slug','usd_rate'
];
    public function BankPayments(){
        return $this->hasMany(BankPayment::class);
    }


    public function BankStatements(){
        return $this->hasMany(BankStatement::class);
    }
}
