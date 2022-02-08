<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __invoke(Request $request)
    {
        $image = Image::latest()->first();

        $filenames = json_decode($image->name);
        $paths = json_decode($image->image_path);

        $names = [];
        $images = [];
        for ($i=0; $i < count($paths); $i++){
            $names[] = $filenames[$i];
            $images[] = Storage::disk('s3')->url($paths[$i]);
        }

        $data = [
            "names" => $names,
            "images" => $images
        ];

        return view('gallery', $data);
    }
}
