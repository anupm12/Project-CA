<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    Protected $fillable=[
        'heading','subheading','highlightedtext'
    ];
}
