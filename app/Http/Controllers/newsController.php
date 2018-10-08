<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
use Alert;
use Redirect;
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

        alert()->success('News Added Successfully')->autoclose(2900);
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
        alert()->success('News Updated Successfully')->autoclose(2900);

       return Redirect::back();
    }

    public function newsDelete(Request $request){
        $id = $request -> id;
        $news = News::find($id);
        $news -> delete();
        alert()->success('News Deleted Successfully')->autoclose(2900);
        return redirect()->back();
    }
}
