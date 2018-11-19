<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    Protected $fillable=[
        'name',
        'image',
        'role',
        'content'
    ];

    public function getFeaturedAttribute($image){
        return asset($image);
    }
}
