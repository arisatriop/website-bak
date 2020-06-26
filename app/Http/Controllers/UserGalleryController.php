<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Thumbnail;
use App\Album;

class UserGalleryController extends Controller
{
    public function index() {
        $photo = Photo::all()->sortDesc();
        $thumbnails = Thumbnail::all()->sortDesc();
        $photo_album = Album::all();
        return view('gallery', compact('photo', 'thumbnails', 'photo_album'));
    }
}
