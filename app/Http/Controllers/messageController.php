<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;
use DB;
use Alert;
class messageController extends Controller
{

    public function index(){
        return view('admin.message.message')->with('message',Message::orderBy('created_at', 'desc')->get());
    }

    public function favIndex(){
        return view('admin.message.favorite')->with('message',Message::orderBy('created_at', 'desc')->get());
    }

    public function message(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'phone'=>'required',
            'email'=>'required',
            'content'=>'required'
        ]);

        $news = Message::create([
            'name'=> $request -> name,
            'phone'=> $request -> phone,
            'email'=> $request -> email,
            'content'=> $request -> content
        ]);

        Session::flash('success','Successfully');
        return redirect()->back();
    }

    public function updateInbox(Request $request){

        $mid = $request -> msgId;

        $update = Message::where('id',$mid)
                  ->update([
                      'status' => 1
                  ]);


    }


    public function favorite(Request $request){

        $favId =  $request -> favid;
        $update = Message::where('id',$favId)
                  ->update([
                      'favorite' => 1
                  ]);


                  if($update)
                  {
                      echo "fav SuccessFully = ".$favId;
                  }
    }

    public function unfavorite(Request $request){
        $favId =  $request -> favid;
        $update = Message::where('id',$favId)
                  ->update([
                      'favorite' => 0
                  ]);


                  if($update)
                  {
                      echo "unfav SuccessFully = ".$favId;
                  }
    }

    public function deleteAll(Request $request){
        if($request -> deleteCheck){
        $count = 0;
        foreach($request -> deleteCheck as $id){
            $delete = Message::where("id",$id)->delete();
            $count++;
        }
            if($count>1){
            alert()->success($count.' Messagess are Deleted Successfully')->autoclose(4000);
            return redirect()->back();
            }
            else{
                alert()->success($count.' Message is Deleted Successfully')->autoclose(4000);
                return redirect()->back();
            }


    }
    else{
        alert()->error('Error Message', 'Select What you want to delete')->autoclose(4000);
        return redirect()->back();

    }
}


}
