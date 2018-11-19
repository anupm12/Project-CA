<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DownloadFile;
use Alert;

class downloadFileController extends Controller
{
    public function download(){
        return view('admin.download.download')->with('download',DownloadFile::all());
    }

    public function downloadAdd(Request $request){

        $this -> validate($request, [
            'heading' => 'required',
            'filePath' => 'required|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $file = $request-> filePath;
        $file_new = time().$file->getClientOriginalName();
        $file -> move('Uploads/pdf', $file_new);
        $extension = pathinfo(storage_path().'/Uploads/pdf/'.$file_new, PATHINFO_EXTENSION);

        if($extension == 'ppt' ||  $extension == 'pptx')
            $icon = 'icon-powerpoint';
        else if($extension == 'doc' ||  $extension == 'docx')
            $icon = 'icon-word';
        else
            $icon = 'icon-pdf';

        $download = DownloadFile::create([
            'fileName'=>$file -> getClientOriginalName(),
            'heading'=> $request -> heading,
            'type'=> $extension,
            'icon'=>$icon,
            'content' => $request -> content,
            'path'=> '/Uploads/pdf/'.$file_new
        ]);

        alert()->success('File Added Successfully')->autoclose(2900);
        return redirect()->back();

    }

    public function downloadEdit(Request $request){
        $this -> validate($request, [
            'heading' => 'required',
            'filePath' => 'mimes:pdf,doc,docx,ppt,pptx',
        ]);

    $id = $request -> id;
    $download = DownloadFile::find($id);

    if($request -> hasfile('filePath')){
        $file = $request-> filePath;
        $file_path = ltrim($download->path, '/');
        
        if(file_exists($file_path)){
            unlink($file_path);
        }


        $file_new = time().$file->getClientOriginalName();
        $file -> move('Uploads/pdf', $file_new);
        $extension = pathinfo(storage_path().'/Uploads/pdf/'.$file_new, PATHINFO_EXTENSION);
        if($extension == 'ppt' ||  $extension == 'pptx')
            $icon = 'icon-powerpoint';
        else if($extension == 'doc' ||  $extension == 'docx')
            $icon = 'icon-word';
        else
            $icon = 'icon-pdf';

        $download -> fileName = $file -> getClientOriginalName();
        $download -> type = $extension;
        $download -> icon = $icon;
        $download -> path = '/Uploads/pdf/'.$file_new;
    }
    
   

     $download -> heading = $request -> heading;
     $download -> content = $request -> content;
     $download -> save();

    alert()->success('File Updated Successfully')->autoclose(2900);
    return redirect()->back();
    }

    public function downloadDelete(Request $request){
        $id = $request -> id;
        $download = DownloadFile::find($id);

        $file_path = ltrim($download->path, '/');
;

        if(file_exists($file_path)){
            unlink($file_path);
        }

        $download -> delete();

        alert()->success('File Deleted Successfully')->autoclose(2900);
        return redirect()->back();
    }

    public function publish(Request $request){
        $id = $request -> pubid;
        $update = DownloadFile::find($id)->update([
            "publish" => 1
        ]);

        if($update)
        {
            echo "unfav SuccessFully = ".$pubId;
        }

    }

    public function unpublish(Request $request){
        $id = $request -> pubid;
        $update = DownloadFile::find($id)->update([
            "publish" => 0
        ]);

        if($update)
        {
            echo "unfav SuccessFully = ".$pubId;
        }

    }
}
