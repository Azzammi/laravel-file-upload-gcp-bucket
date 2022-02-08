<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __invoke(Request $request)
    {
        $image = Image::all();
        dd($image);

        return view('gallery');
    }
}
