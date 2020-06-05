<?php

namespace App\Http\Controllers;

use App\Home;
use App\WebTitle;
use App\Testimony;
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
        // Home::create($request->all());
        // return redirect('/admin-home')->with('sukses','Data berhasil ditambahkan');
        $home_images = new Home();

        $home_images->judul = $request->input('judul');
        $home_images->image = $request->input('image');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $home_image = Home::find($id);
        // $home_image->update($request->all());
        // return redirect('/admin-home')->with('sukses','Data berhasil diupdate');

        /**
         *  Query for table home_images
         */
        $home_images = Home::find($id);

        $home_images->judul = $request->input('judul');
        $home_images->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home_image = Home::find($id);
        $home_image->delete($home_image);
        return redirect('/admin-home')->with('sukses_delete', 'Data telah dihapus');
    }

}
