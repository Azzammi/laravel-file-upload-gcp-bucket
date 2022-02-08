<?php

use App\Http\Controllers\FileUpload;
use App\Http\Controllers\FileUploadsController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Create file upload form
Route::get('/upload-file',  [FileUpload::class,'createForm']); //Single Upload
Route::get('/uploads-file', [FileUploadsController::class,'index']); //Multi Upload

// Store file
Route::post('/upload-file', [FileUpload::class,'fileUpload'])->name('fileUpload'); //Single Upload
Route::post('/uploads-file', [FileUploadsController::class,'fileUploads'])->name('imageUpload'); //Multi Upload

//Show Images
Route::get('/galleries',GalleryController::class);
