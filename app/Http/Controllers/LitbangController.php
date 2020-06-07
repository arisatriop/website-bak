<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Litbang;

class LitbangController extends Controller
{
    public function index()
    {
        $person = Litbang::all();
        return view('admin.litbang', compact('person'));
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
            $file->move('uploads/home_images/', $filename);
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
        $person->name = $request->input('name');
        $person->position = $request->input('position');
        $person->faculty = $request->input('faculty');
        $person->quote = $request->input('quote');
        $person->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $person->image = $filename;
        } else {
            return $request;
            $person->image = '';
        }

        $person->save();
        return redirect('/admin-litbang')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $person = Litbang::find($id);
        $data = $person->name;
        $person->delete($person);

        return redirect('/admin-litbang')->with('sukses_delete', $data);
    }
}
