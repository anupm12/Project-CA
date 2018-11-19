<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    Protected $fillable=[
        'heading','content','image','icon'
    ];

    public function getFeaturedAttribute($image){
        return asset($image);
    }
}
