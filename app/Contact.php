<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'mobile', 'phone', 'email','address','map','publishMobile','publishPhone','publishEmail','publishAddress','publishMap'
    ];
}
