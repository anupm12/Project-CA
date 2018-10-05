<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
   public function index(){
       return view('admin.home');
   }


    public function setting(){
        return view('admin.setting');
    }

    public function download(){
        return view('admin.download.download');
    }

    public function downloadAdd(){
        return view('admin.download.add');
    }

    public function about(){
        return view('admin.about.about');
    }

    public function aboutAdd(){
        return view('admin.about.add');
    }


    public function single(){
        return view('single');
    }

    public function services1(){
        return view('allservices');
    }

    public function about1(){
        return view('about');
    }

    public function download1(){
        return view('download');
    }

}
