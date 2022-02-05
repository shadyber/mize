<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'stars','comment','user_id','item_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function item(){
        return $this->belongsTo(Item::class,'item_id');
    }

    public static function average($item_id){
    $item=Item::find($item_id);

    $total=0;
    foreach($item->Reviews as $review){
    $total=($review->stars+$total);
    }

    return(round($total/count($item->Reviews)));
    }

public function draw_average_stars($item_id){
 $item=Item::find($item_id);

    $total=0;
    foreach($item->Reviews as $review){
    $total=($review->stars+$total);
    }
 if($total==0){
 return '<span class="far fa-star"></span>';
 }else{

$average=$total/count($item->Reviews);
if($average<=1){
return ' <span><i class="far fa-star"></i> </span>  ';
}else if($average<=2){

return ' <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>  ';
}else if($average<=3){

return ' <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>  ';
}
else if($average<=4){

return ' <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>    <span><i class="far fa-star"></i> </span>  ';
}
else if($average<=5){

return ' <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>   <span><i class="far fa-star"></i> </span>    <span><i class="far fa-star"></i> </span>  <span><i class="far fa-star"></i> </span>  ';
}


 }

    }
}
