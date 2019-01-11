<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){
        return view('gallery.index');
    }
    public function showPhotoform()
    {
        return view('gallery.add_photo_form');
    }
    public function savePhotoForm(Request $request)
    {
       $validData = $request->validatie([
          'title' => 'required',
          'description'=>'min:10',
           'photo' => 'required|image'
       ]);

        dd($validData);
    }
}
