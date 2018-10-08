<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadFile extends Model
{
    Protected $fillable=[
        'fileName',
        'path',
        'publish',
        'type',
        'heading'
    ];

    public function getFeaturedAttribute($path){
        return asset($path);
    }
}
