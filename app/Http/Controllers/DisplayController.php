<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
   public function index(){
       return view('admin.home');
   }

   public function services(){
    return view('admin.services.services');
    }

    public function hero(){
        return view('admin.hero.hero');
    }

    public function herotext(){
        return view('admin.hero.herotext');
    }

    public function servicesadd(){
        return view('admin.services.add');
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

    public function single(){
        return view('single');
    }

    public function services1(){
        return view('services');
    }

    public function about1(){
        return view('about');
    }

    public function download1(){
        return view('download');
    }

}
