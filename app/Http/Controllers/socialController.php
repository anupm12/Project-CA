<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;

class socialController extends Controller
{
    public function social(){
        return view('admin.social')->with('social',Social::all());
    }

    public function socialAdd(Request $request,$id){
        $this -> validate($request, [
            'link'=>'required'
        ]);

        $social = Social::find($id);
        $social -> link = $request -> link;
        alert()->success($social->name.' Link Added Successfully.')->autoclose(2900);
        $social -> save();
        return redirect()->back();
    }

    public function socialSave(Request $request){

            if($request->facebook)
                 $social = Social::find(1)->update(['check' => 1]);

            else
                $social = Social::find(1)->update(['check' => 0]);


            if($request->instagram)
                $social = Social::find(2)->update(['check' => 1]);

            else
                $social = Social::find(2)->update(['check' => 0]);

            if($request->googleplus)
                $social = Social::find(3)->update(['check' => 1]);

            else
                $social = Social::find(3)->update(['check' => 0]);

            if($request->twitter)
                $social = Social::find(4)->update(['check' => 1]);

            else
                $social = Social::find(4)->update(['check' => 0]);

            if($request->linkedin)
                $social = Social::find(5)->update(['check' => 1]);

            else
                $social = Social::find(5)->update(['check' => 0]);

            if($request->youtube)
                $social = Social::find(6)->update(['check' => 1]);

            else
                $social = Social::find(6)->update(['check' => 0]);

            if($request->whatsapp)
                $social = Social::find(7)->update(['check' => 1]);

            else
                $social = Social::find(7)->update(['check' => 0]);


               alert()->success('Your Changes Updated Successfully.')->autoclose(2900);
               return redirect()->back();
    }
}
