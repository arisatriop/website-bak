<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    public function index() 
    {
        $document = Document::all();
        return view('admin.document', compact('document'));
    }

    public function create(Request $request) 
    {
        $document = new Document();

        $document->title = $request->input('title');
        $document->description = $request->input('description');
        $document->document = $request->input('document');

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/document/', $filename);
            $document->document = $filename;
        } else {
            $document->document = '';
            return redirect('/admin-document')->with('gagal', 'data tidak boleh kosong');
        }

        $document->save();
        return redirect('/admin-document')->with('sukses', 'Dokumen berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete($document);
        $name = $document->title;
        $data = $document->document;
        unlink(public_path('uploads/document/' . $data));

        return redirect('admin-document')->with('sukses_delete', $name);
    }
}
