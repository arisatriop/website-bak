<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all()->sortDesc();
        return view('admin.article', compact('article'));
    }

    public function create(Request $request) 
    {
        $article = new Article();
        
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->image = $request->input('image');
        $article->content = $request->input('content');
        $article->date = Carbon::now();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $article->image = $filename;
        } else {
            $article->image = '';
            return redirect('/admin-article')->with('gagal', 'data tidak boleh kosong');
        }

        $article->save();
        return redirect('/admin-article')->with('sukses', 'Artikel berhasil ditambahkan');
        
    }
    
}
