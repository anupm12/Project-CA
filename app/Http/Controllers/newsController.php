<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
class newsController extends Controller
{
    public function news(){
        return view('admin.news.news')->with('news',News::all());
    }

    public function newsAdd(Request $request){
        $this->validate($request,[
            'heading'=>'required|max:255',
            'link'=>'required'
        ]);

        $news = News::create([
            'heading'=> $request -> heading,
            'link'=> $request -> link
        ]);

        Session::flash('success','News Added Successfully');
        return redirect()->back();
    }

    public function newsEdit(Request $request){
        $this -> validate($request, [
            'heading' => 'required|max:20',
            'link' => 'required',
        ]);
        $id = $request -> id;
        $news = News::find($id);
        $news -> heading = $request -> heading;
        $news -> link = $request -> link;

        $news -> save();
        Session::flash('success','News Updated Successfully');
        return redirect()->back();
    }

    public function newsDelete(Request $request){
        $id = $request -> id;
        $news = News::find($id);
        $news -> delete();
        Session::flash('success','News Delted Successfully');
        return redirect()->back();
    }
}
