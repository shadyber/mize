<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreLocation extends Model
{
    use HasFactory;
    protected $fillable=[
    'longt','lat','branch_name','city','tel','email','address_line'
    ];
}
