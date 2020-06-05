<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Visi;
use App\Misi;

use function GuzzleHttp\Promise\all;

class AboutController extends Controller
{
    public function index() 
    {
        $info = About::all();
        $visi = Visi::all();
        $misi = Misi::all();
        // $visi = Visi::orderBy('id', 'desc')->take(1)->get();
        return view('admin.about', compact('info','visi','misi'));
    }

    public function createVisi(Request $request)
    {
        $visi = new Visi();
        $visi->create($request->all());

        return redirect('/admin-about')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function createMisi(Request $request) 
    {
        $misi = new Misi();
        $misi->create($request->all());

        return redirect('/admin-about')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function updateInfo(Request $request, $id)
    {
        $info = About::find($id);
        $info->update($request->all());

        return redirect('/admin-about')->with('sukses', 'Data berhasil diupdate');
    }

    public function updateVisi(Request $request, $id)
    {
        $visi = Visi::find($id);
        $visi->update($request->all());

        return redirect('/admin-about')->with('sukses', 'Data berhasil diupdate');
    }

    public function updateMisi(Request $request, $id)
    {
        $misi = Misi::find($id);
        $misi->update($request->all());

        return redirect('/admin-about')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroyVisi($id) 
    {
        $visi = Visi::find($id);
        $visi->delete($visi);

        return redirect('/admin-about')->with('sukses_delete_visi', 'Visi Telah Dihapus');
    }

    public function destroyMisi($id)
    {
        $misi = Misi::find($id);
        $misi->delete($misi);

        return redirect('/admin-about')->with('sukses_delete_misi', 'Misi Telah Dihapus');
    }


}
