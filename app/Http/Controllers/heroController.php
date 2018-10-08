<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Session;
use App\HeroImage;

class heroController extends Controller
{
    public function hero(){
        return view('admin.hero.hero')->with('heroText',Hero::first())->with('heroImages',HeroImage::all());
    }

    public function editHerotext(Request $request){
        $id=1;
        $this -> validate($request, [
            'heading' => 'required|max:20',
            'subheading' => 'required|max:35',
            'highlightedtext' => 'required|max:15'
        ]);

        $heroText = Hero::find($id);

        $heroText -> heading = $request -> heading;
        $heroText -> subheading = $request -> subheading;
        $heroText -> highlightedtext = $request -> highlightedtext;

        $heroText->save();
        alert()->success('Updated Successfully.')->autoclose(2900);
        return redirect()->back();
    }

    public function editHeroImage(Request $request){

        $this -> validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500',
        ]);

        $heroImage = HeroImage::find($request->id);

        if($request -> hasfile('image')){
            $image = $request -> image;
            $image_new = time().$image->getClientOriginalName();
            $image -> move('Images/Carousel', $image_new);

            $heroImage -> image = '/Images/Carousel/'.$image_new;

        }

        $heroImage->save();
        alert()->success('Updated Successfully.')->autoclose(2900);
        return redirect()->back();
    }
}
