<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\News;

class DisplayController extends Controller
{
    public function index(){
       return view('admin.home')->with('message',Message::orderBy('created_at', 'desc')->take(5)->get())
                                ->with('newsCount',News::all()->count())
                                ->with('messageCount',Message::all()->count());
   }


    public function setting(){
        return view('admin.setting');
    }

   

    public function about(){
        return view('admin.about.about');
    }

    public function aboutAdd(){
        return view('admin.about.add');
    }







    public function contact(){
        return view('contact');
    }

    public function allServices(){
        return view('allservices');
    }

    public function single(){
        return view('single');
    }

    public function about1(){
        return view('about');
    }

    public function download1(){
        return view('download');
    }

    public function welcome(){
        return view('welcome');
    }
}
