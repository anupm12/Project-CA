<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class serviceController extends Controller
{
    public function services(){
        return view('admin.services.services');
        }
    
     public function servicesadd(){
         return view('admin.services.add');
        }

    public function createService(Request $request){
        $this -> validate($request, [
            'heading' => 'required|max:20',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500',
        ]);

        $image = $request -> picture;
        $image_new = time().$image->getClientOriginalName();
        dd($request->picture,$image_new);
        $image -> move('Images/Services', $image_new);
        // dd($image);

        $services =new Service;
        $services->heading=$request->heading;
        $services->image='Images/Services'.$image_new;
        $services->content=$request->content;

        $services->save();
      

       Session::flash('success','Updated successfully.');
       return redirect()->route('admin.services');
    }
}
