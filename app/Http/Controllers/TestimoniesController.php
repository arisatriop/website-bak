<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $testimonials = new Testimony();

        $testimonials->name = $request->input('name');
        $testimonials->position = $request->input('position');
        $testimonials->quote = $request->input('quote');
        $testimonials->avatar = $request->input('avatar');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $testimonials->avatar = $filename;
        } else {
            return $request;
            $testimonials->avatar = '';
        }

        $testimonials->save();
        return redirect('/admin-home')->with('sukses3', 'Data berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonials = Testimony::find($id);
        $testimonials->name = $request->input('name');
        $testimonials->position = $request->input('position');
        $testimonials->quote = $request->input('quote');
        $testimonials->avatar = $request->input('avatar');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $testimonials->avatar = $filename;
        } else {
            $testimonials->avatar = '';
            // return $request;
            dd($testimonials);
        }

        $testimonials->save();
        return redirect('/admin-home')->with('sukses3', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimony::find($id);
        $testimonials->delete($testimonials);
        return redirect('/admin-home')->with('sukses_delete2', 'Data telah dihapus');
    }
}
