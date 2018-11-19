<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class aboutController extends Controller
{

    public function about(){
        return view('admin.about.about')->with('about',About::all());
    }

    public function aboutAdd(){
        return view('admin.about.add');
    }

    public function aboutEdit($id){
        return view('admin.about.edit')->with('about',About::find($id));
    }

   public function add(Request $request){
    //    dd($request -> image);
    $this -> validate($request, [
        'name' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:600',
        'role' => 'required',
        'content' => 'required'
    ]);

        $image = $request-> image;
        $image_new = time().$image->getClientOriginalName();
        $image -> move('Uploads/about', $image_new);

        $about = About::create([
            'name'=> $request -> name,
            'image'=> '/Uploads/about/'.$image_new,
            'role'=>$request -> role,
            'content'=>$request -> content,
        ]);

        alert()->success('Added Successfully')->autoclose(2900);
        return redirect()->route('admin.about');
   }

   public function edit(Request $request,$id){
    $this -> validate($request, [
        'name' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:600',
        'role' => 'required',
        'content' => 'required'
    ]);

    $about = About::find($id);
    if($request -> hasfile('image')){
        $image_path = ltrim($about->image, '/');

        if(file_exists($image_path)){
         // dd($about->image);
         unlink($image_path);
         }

        $image = $request-> image;
        $image_new = time().$image->getClientOriginalName();
        $image -> move('Uploads/about', $image_new);

        $about -> image = '/Uploads/about/'.$image_new;
    }

    $about -> name = $request -> name;
    $about -> role = $request -> role;
    $about -> content = $request -> content;

    $about->save();

    alert()->success('Updated Successfully')->autoclose(2900);
    return redirect()->route('admin.about');
   }

   public function delete(Request $request){
       $id = $request -> id;
       $about = About::find($id);
       $image_path = ltrim($about->image, '/');

       if(file_exists($image_path)){
        // dd($about->image);
        unlink($image_path);
        }

        $about -> delete();

        alert()->success('Deleted Successfully')->autoclose(2900);
        return redirect()->route('admin.about');
   }

}


