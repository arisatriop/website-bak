<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;


class PhotoController extends Controller
{
    public function index() 
    {
        $photo = Photo::all()->sortDesc();
        return view('admin.photo', compact('photo'));
    }

    public function create(Request $request) 
    {
        $photo = new Photo();
        $photo->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/gallery/', $filename);
            $photo->image = $filename;
        } else {
            $photo->image = '';
            return redirect('/admin-gallery-photo')->with('gagal', 'data tidak boleh kosong');
        }

        $photo->save();
        return redirect('/admin-gallery-photo')->with('sukses', 'Photo berhasil ditambahkan');

    }

    public function delete($id) {
        $photo = Photo::find($id);
        $photo->delete($photo);
        $img = $photo->image;
        unlink(public_path('uploads/gallery/' . $img));
        return redirect('/admin-gallery-photo')->with('sukses_delete', 'Photo telah dihapus');
    }
}
