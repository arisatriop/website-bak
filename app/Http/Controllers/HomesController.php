<?php

namespace App\Http\Controllers;

use App\Home;
use App\WebTitle;
use App\Testimony;
use App\Inbox;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home_images = Home::all();
        $web_titles = WebTitle::all();
        $testimonials = Testimony::all();
        return view('admin.home', compact('home_images', 'web_titles', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $home_images = new Home();

        $home_images->judul = $request->input('judul');
        $home_images->image = $request->input('image');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $home_images->image = $filename;
        } else {
            return $request;
            $home_images->image = '';
        }

        $home_images->save();
        return redirect('/admin-home')->with('sukses', 'Data berhasil ditambahkan');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $home_images = Home::find($id);

        $home_images->judul = $request->input('judul');
        $home_images->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $home_images->image = $filename;
        } else { 
            $home_images->image = '';
            return 'GAMBAR TIDAK BOLEH KOSONG';
        }

        $home_images->save();
        return redirect('/admin-home')->with('sukses', 'Data berhasil diupdate');
    }

    
    public function update2(Request $request, $id)
    {
        /**
         *  Query for table web_titles
         */
        $web_titles = WebTitle::find($id);
        $web_titles->update($request->all());

        return redirect('/admin-home')->with('sukses2', 'Data berhasil diupdate');
    }

    public function updateText(Request $request, $id)
    {
        /**
         *  Query for table web_titles
         */
        $web_titles = WebTitle::find($id);
        $web_titles->run_text = $request->input('run_text');
        $web_titles->save();

        return redirect('/admin-home')->with('sukses_text', 'Teks berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home_image = Home::find($id);
        $home_image->delete($home_image);
        // $img = $home_image->image;
        // unlink(public_path('uploads/home_images/' . $img));
        return redirect('/admin-home')->with('sukses_delete', 'Data telah dihapus');
    }

    public function inbox() 
    {
        $inbox = Inbox::all()->sortDesc();
        return view('admin.inbox', compact('inbox'));
    }

}
