<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOrder extends Model
{
    use HasFactory;
    protected $fillable=[
    'name','email','tel','cart','user_id','amount'
    ];
}