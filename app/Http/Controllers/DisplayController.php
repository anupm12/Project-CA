<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){
       return view('admin.home');
    }

    public function social(){
        return view('admin.social');
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

    public function news(){
        return view('admin.news.news');
    }

    public function newsAdd(){
        return view('admin.news.add');
    }






    public function contact(){
        return view('contact');
    }

    public function allServices(){
        return view('allservices');
    }
}
