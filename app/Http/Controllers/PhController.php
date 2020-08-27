<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ph;

class PhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Ph::all();
        $department_images = \App\DepartmentImages::all()->take(1);
        return view('admin.ph', compact('person','department_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $person = new Ph();

        $person->name = $request->input('name');
        $person->position = $request->input('position');
        $person->faculty = $request->input('faculty');
        $person->quote = $request->input('quote');
        $person->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/staff_images/', $filename);
            $person->image = $filename;
        } else {
            return $request;
            $person->image = '';
        }

        $person->save();
        return redirect('/admin-ph')->with('sukses', 'Data berhasil ditambahkan');
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
        $person = Ph::find($id);

        $person->name = $request->input('name');
        $person->position = $request->input('position');
        $person->faculty = $request->input('faculty');
        $person->quote = $request->input('quote');
        $person->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/staff_images/', $filename);
            $person->image = $filename;
        } else {
            $person->image = '';
            // return "GAGAL MEMPERBAHARUI DATA! GAMBAR TIDAK BOLEH KOSONG";
            return redirect('/admin-ph')->with('sukses', 'GAGAL');
        }

        $person->save();
        return redirect('/admin-ph')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function updatePhoto(Request $request, $id) {
        
        $photo = \App\DepartmentImages::find($id);
        $photo->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/department_images/', $filename);
            $photo->image = $filename;
        } else {
            $photo->image = '';
            // return "GAGAL MEMPERBAHARUI DATA! GAMBAR TIDAK BOLEH KOSONG";
            return redirect('/admin-ph')->with('sukses', 'GAGAL');
        }

        $photo->save();
        return redirect('/admin-ph')->with('sukses_update_photo', 'Gambar berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Ph::find($id);
        $data = $person->name;
        $person->delete($person);
        // $img = $person->image;
        // unlink(public_path('uploads/staff_images/' . $img));
        return redirect('/admin-ph')->with('sukses_delete', $data);
    }

}
