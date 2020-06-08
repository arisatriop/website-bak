<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audit;

class AuditController extends Controller
{
    public function index() {
        $person = Audit::all();
        $department_images = \App\DepartmentImages::all()->skip(1)->take(1);
        return view('admin.audit', compact('person','department_images'));
    }

    public function create(Request $request) 
    {
        $person = new Audit();
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
        return redirect('/admin-audit')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $person = Audit::find($id);
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
        return redirect('/admin-audit')->with('sukses', 'Data berhasil diupdate');
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
            $photo->image = '';
            // return "GAGAL MEMPERBAHARUI DATA! GAMBAR TIDAK BOLEH KOSONG";
            return redirect('/admin-ph')->with('sukses', 'GAGAL');
        }

        $photo->save();
        return redirect('/admin-audit')->with('sukses_update_photo', 'Gambar berhasil diupdate');
    }

    public function destroy($id) 
    {
        $person = Audit::find($id);
        $data = $person->name;
        $person->delete($person);

        return redirect('/admin-audit')->with('sukses_delete', $data);
    }

}
