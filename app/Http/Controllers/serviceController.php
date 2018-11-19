<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class serviceController extends Controller
{
    public function services(){
        return view('admin.services.services')->with('services',Service::all());
        }

     public function servicesAdd(){
         return view('admin.services.add');
        }

    public function createService(Request $request){
        $this -> validate($request, [
            'heading' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:600',
        ]);

        if($request -> image){
            $image = $request-> image;
            $image_new = time().$image->getClientOriginalName();
            $image -> move('Uploads/service', $image_new);
            $image_path = '/Uploads/service/'.$image_new;
        }
        else {
            $image_path = 0;
        }

        $icon = strtolower($request -> heading);
        $icon = preg_replace('/\s+/', '', $icon);
        $icon = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $icon);
        $icon = 'icon-'.$icon;

        $services = Service::create([
            'heading' => $request -> heading,
            'image'=>  $image_path,
            'icon'=> $icon,
            'content'=> $request -> content
        ]);


        alert()->success('Service Added Successfully')->autoclose(2900);
        return redirect()->route('admin.services');
    }

    public function servicesEdit($id){
        return view('admin.services.edit')->with('service',Service::find($id));
       }

    public function updateService(Request $request,$id){
        $this -> validate($request, [
            'heading' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:600',
            'content' => 'required'
        ]);

        $service = Service::find($id);
        if($request -> hasfile('image')){
            $image_path = ltrim($service->image, '/');
            if(file_exists($image_path)){
                // dd($about->image);
                unlink($image_path);
                }
                $image = $request-> image;
                $image_new = time().$image->getClientOriginalName();
                $image -> move('Uploads/service', $image_new);

                $service -> image = '/Uploads/service/'.$image_new;
        }
        $icon = strtolower($request -> heading);
        $icon = preg_replace("/[^a-zA-Z]/", "", $icon);
        $icon = preg_replace('/\s+/', '', $icon);
        $icon = 'icon-'.$icon;

        $service -> heading = $request -> heading;
        $service -> icon = $icon;
        $service -> content = $request -> content;
        $service -> save();

        alert()->success('Service Updated Successfully')->autoclose(2900);
        return redirect()->route('admin.services');
    }

    public function deleteService(Request $request){
        $id = $request -> id;
        $service = Service::find($id);
        $image_path = ltrim($service->image, '/');

        if(file_exists($image_path)){

         unlink($image_path);
         }

         $service -> delete();

         alert()->success('Deleted Successfully')->autoclose(2900);
         return redirect()->route('admin.services');
    }
}
