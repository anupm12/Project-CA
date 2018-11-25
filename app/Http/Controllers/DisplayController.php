<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\News;
use App\DownloadFile;
use App\Social;
use App\Service;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{

    public function welcome(){
        return view('welcome')->with('social',Social::all());
    }

    public function index(){




       return view('admin.home')->with('message',Message::orderBy('created_at', 'desc')->take(5)->get())
                                ->with('newsCount',News::all()->count())
                                ->with('messageCount',Message::all()->count());

   }


    public function setting(){
        return view('admin.setting');
    }


    public function contact(){
        return view('contact');
    }

    public function allServices(){
        return view('allservices')->with('services',Service::all())
                                  ->with('social',Social::all());
    }

    public function single($id){
        return view('single')->with('service',Service::find($id))
                             ->with('services',Service::all())
                             ->with('social',Social::all());
    }

    public function about1(){
        return view('about')->with('social',Social::all());
    }

    public function download1(){
        return view('download')->with('download',DownloadFile::orderBy('created_at', 'desc')->paginate(8))
                               ->with('social',Social::all());
    }

    public function results(){
        $file = \App\DownloadFile::where('heading','like','%'.request('search').'%')->get();
        if(empty($file))
            $file = NULL;
        return view('results')->with('download',$file)
                              ->with('social',\App\Social::all());
    }


}
