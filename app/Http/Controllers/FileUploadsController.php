<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class FileUploadsController extends Controller
{
    public function index(){
        return view('file-uploads');
    }

    public function fileUploads(Request $request){
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);


        if($request->hasFile('imageFile')){
            foreach($request->file('imageFile') as $file){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);
                $imgData[] = $name;
            }

            $fileModal = new Image();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);

            $fileModal->save();
            return back()->with('success','File has successfully uploaded!');
        }
    }
}
