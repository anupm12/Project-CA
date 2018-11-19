<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadFile extends Model
{
    Protected $fillable=[
        'fileName',
        'icon',
        'path',
        'publish',
        'type',
        'heading',
        'content'
    ];

    public function getFeaturedAttribute($path){
        return asset($path);
    }
}
