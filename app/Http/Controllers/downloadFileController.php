<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DownloadFile;
use Alert;

class downloadFileController extends Controller
{
    public function download(){
        return view('admin.download.download');
    }

    public function downloadAdd(Request $request){

        $this -> validate($request, [
            'heading' => 'required',
            'filePath' => 'required',
        ]);

        $file = $request-> filePath;
        $file_new = time().$file->getClientOriginalName();
        $file -> move('Uploads/pdf', $file_new);
        $extension = pathinfo(storage_path().'/Uploads/pdf/'.$file_new, PATHINFO_EXTENSION);

        $download = DownloadFile::create([
            'fileName'=>$file -> getClientOriginalName(),
            'heading'=> $request -> heading,
            'type'=> $extension,
            'path'=> '/Uploads/pdf/'.$file_new
        ]);

        alert()->success('File Added Successfully')->autoclose(2900);
        return redirect()->back();

    }

    public function downloadEdit(Request $request){
        $this -> validate($request, [
            'heading' => 'required',
            'filePath' => 'required|mimes:pdf,doc,docx,ppt,pptx',
        ]);


        $id =  $request -> id;
        $download = DownloadFile::find($id);
        if($request->hasfile('filePath')){
            $file = $request -> filePath;
            $file_new = time().$file->getClientOriginalName();
            $file -> move('Uploads/pdf', $file_new);
            $extension = $request->file('filePath')->extension();

            $download -> path = '/Uploads/pdf/'.$file_new;
            $download -> type = $extension;
        }

        $download -> heading  = $request -> heading;
        $download -> fileName = $request -> filePath;
        $download -> save();

        alert()->success('File Updated Successfully')->autoclose(2900);
        return redirect()->back();
    }

    public function downloadDelete(Request $request){
        $id = $request -> id;
        $download = DownloadFile::find($id);
        if(file_exists($download -> path)){
            unlink($download -> path);
        }

        $download -> delete();

        alert()->success('File Deleted Successfully')->autoclose(2900);
        return redirect()->back();
    }
}
