<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;
use Session;
class Message extends Model
{
    protected $fillable = ['name','phone','email','content','status'];
}
