<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic;

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

        $imageName = [];
        $imageData = [];

        if($request->hasFile('imageFile')){
            foreach($request->file('imageFile') as $file){
                //Answer From : https://laracasts.com/discuss/channels/laravel/image-intervention-with-laravel-53?page=1&replyId=308335
                $path = 'images/';
                $file_path = $path . Str::random(30) . '.webp';

                $name = $file->getClientOriginalName();
                $image = ImageManagerStatic::make($file)->encode('webp',90);

                Storage::disk('s3')->put($file_path, (string) $image);

                $imageName[] = $name;
                $imageData[] = $file_path;
            }

            $fileModal = new Image();
            $fileModal->name = json_encode($imageName);
            $fileModal->image_path = json_encode($imageData);

            $fileModal->save();
            return back()->with('success','File has successfully uploaded!');
        }
    }
}
