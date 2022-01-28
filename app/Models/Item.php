<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Item extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable=['name','slug','detail','item_category_id','thumb', 'photo','color','price','user_id','tags','width','height','diameter','weight','init_qnt','status','badge'];
    protected $dates = [ 'deleted_at' ];

    public function user(){
        return $this->belongsTo(User::class);
    }



    public function Category(){
        return $this->belongsTo(ItemCategory::class,'item_category_id');
    }

    public function ItemPhoto(){
        return $this->hasMany(ItemPhoto::class);
    }


    public function Reviews(){
        return $this->hasMany(Review::class);
    }
    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'name']
        ];
    }

    public static function lastN($n){
        return Item::orderBy('id', 'desc')->take($n)->get();
    }

    public static function popularN($n){
        return Item::orderBy('visit', 'desc')->take($n)->get();
    }

}
