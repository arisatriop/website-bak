<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Litbang;

class LitbangController extends Controller
{
    public function index()
    {
        $person = Litbang::all();
        $department_images = \App\DepartmentImages::all()->skip(3)->take(1);
        return view('admin.litbang', compact('person', 'department_images'));
    }

    public function create(Request $request)
    {
        $person = new Litbang();
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
        return redirect('/admin-litbang')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $person = Litbang::find($id);
        $tempImage = $person->image;

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
            $person->image = $tempImage;
        }

        $person->save();
        return redirect('/admin-litbang')->with('sukses', 'Data berhasil diupdate');
    }

    public function updatePhoto(Request $request, $id)
    {
        $photo = \App\DepartmentImages::find($id);
        $photo->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/department_images/', $filename);
            $photo->image = $filename;
        } else {
            return $request;
            $photo->image = '';
        }

        $photo->save();
        return redirect('/admin-litbang')->with('sukses_update_photo', 'Gambar berhasil diupdate');
    }

    public function destroy($id)
    {
        $person = Litbang::find($id);
        $data = $person->name;
        $person->delete($person);
        // $img = $person->image;
        // unlink(public_path('uploads/staff_images/' . $img));
        return redirect('/admin-litbang')->with('sukses_delete', $data);
    }

}
