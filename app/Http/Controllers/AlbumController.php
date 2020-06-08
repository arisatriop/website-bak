<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Thumbnail;

class AlbumController extends Controller
{
    public function index()
    {
        $thumbnails = Thumbnail::all()->sortDesc();
        $photo_album = Album::all();
        return view('admin.album', compact('thumbnails', 'photo_album'));
    }

    public function create(Request $request) {

        $data_thumbnail = new Thumbnail();
        $data_thumbnail->album_name = $request->input('album_name');
        $data_thumbnail->thumbnails = $request->input('thumbnails');
        if ($request->hasFile('thumbnails')) {
            $file = $request->file('thumbnails');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/gallery/', $filename);
            $data_thumbnail->thumbnails = $filename;
        } else {
            $data_thumbnail->thumbnails = '';
            return $request;
        }

        $data_thumbnail->save();

        // $data_album->album_name = $request->input('album_name');
        if($request->hasFile('image'))
        {
            $image_array = $request->file('image');
            $image_array_length = count($image_array);
            for($i=0; $i<$image_array_length; $i++)
            {
                $extension = $image_array[$i]->getClientOriginalExtension();
                $filename = rand(0, 99999999) . '.' . $extension;
                $image_array[$i]->move('uploads/gallery/', $filename);

                $data_album = new Album();
                $data_album->album_name = $request->input('album_name');
                $data_album->image = $filename;
                $data_album->save();
            }
        } else {
            return "Please choose any image";
        }

        return redirect('/admin-gallery-album')->with('sukses', 'Album berhasil ditambahkan');
    }

    public function delete($id, $album_name) 
    {
        $thumbnails = Thumbnail::find($id);
        $thumbnails->delete($thumbnails);

        $photo_album_array = Album::all()->where('album_name',  $album_name);
        $photo_album_array_length = count($photo_album_array);
        for($i=0; $i<$photo_album_array_length; $i++)
        {
            $photo_album_array[$i]->delete($photo_album_array[$i]);
        }   
        
        $data = $thumbnails->album_name;
        
        return redirect('/admin-gallery-album')->with('sukses_delete', $data);
    }
}
