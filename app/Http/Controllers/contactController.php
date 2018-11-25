<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Alert;

class contactController extends Controller
{
    public function index(){
        return view('admin.contact.contact')->with('contact',Contact::find(1)->first());
    }

    public function editContact(Request $request){
        $contact = Contact::find(1)->first();

        if($request->email)
            $contact->email = $request->email;
        if($request->phone)
            $contact->phone = $request->phone;
        if($request->map)
            $contact->map   = $request->map;
        if($request->address)
            $contact->address = $request->address;
        if($request->mobile)
            $contact->mobile = $request->mobile;
        $contact->save();

        alert()->success('Your contact details are changed')->autoclose(2900);
        return redirect()->back();
    }

    public function publish(Request $request){
        $update = Contact::find(1)->first();
        if($request->publishPhone == 1)
            $update->publishPhone = 1;
        else if($request->publishPhone == 0)
            $update->publishPhone = 0;

        if($request->publishMobile)
            $update->publishMobile = 1;
        else if($request->publishMobile == 0)
            $update->publishMobile = 0;

        if($request->publishEmail == 1)
                $update->publishEmail = 1;
        else if($request->publishEmail == 0)
                $update->publishEmail = 0;

        if($request->publishAddress == 1)
            $update->publishAddress = 1;
        else if($request->publishAddress == 0)
            $update->publishAddress = 0;

        if($request->publishMap == 1)
            $update->publishMap = 1;
        else if($request->publishMap == 0)
            $update->publishMap = 0;


        $update->save();

        alert()->success('Your contact details are changed')->autoclose(2900);
        return redirect()->back();

    }
}
