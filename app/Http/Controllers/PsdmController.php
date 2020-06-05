<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psdm;

class PsdmController extends Controller
{
    public function index()
    {
        $person = Psdm::all();
        return view('admin.psdm', compact('person'));
    }

    public function create(Request $request)
    {
        $person = new Psdm();
        $person->name = $request->input('name');
        $person->position = $request->input('position');
        $person->faculty = $request->input('faculty');
        $person->quote = $request->input('quote');
        $person->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $person->image = $filename;
        } else {
            return $request;
            $person->image = '';
        }

        $person->save();
        return redirect('/admin-psdm')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $person = Psdm::find($id);
        $person->name = $request->input('name');
        $person->position = $request->input('position');
        $person->faculty = $request->input('faculty');
        $person->quote = $request->input('quote');
        $person->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $person->image = $filename;
        } else {
            return $request;
            $person->image = '';
        }

        $person->save();
        return redirect('/admin-psdm')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $person = Psdm::find($id);
        $data = $person->name;
        $person->delete($person);

        return redirect('/admin-psdm')->with('sukses_delete', $data);
    }
}
