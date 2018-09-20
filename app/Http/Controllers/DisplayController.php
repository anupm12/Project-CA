<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function single(){
        return view('single');
    }

    public function services(){
        return view('services');
    }
}
