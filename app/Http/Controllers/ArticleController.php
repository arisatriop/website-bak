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
        $article->tanggal = $request->input('tanggal');
        $article->image_caption = $request->input('image_caption');
        $article->content = $request->input('content');
        // $article->content2 = $request->input('content2');
        // $article->content3 = $request->input('content3');
        // $article->content4 = $request->input('content4');
        // $article->content5 = $request->input('content5');
        // $article->content6 = $request->input('content6');
        // $article->content7 = $request->input('content7');
        for ($i = 2; $i < 25; $i++) {
            $subjudul = "subjudul$i";
            $content = "content$i";
            $article->$content = $request->input($content);
            $article->$subjudul = $request->input($subjudul);
        }

        
        $article->date = Carbon::now();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/article_event/', $filename);
            $article->image = $filename;
        } else {
            $article->image = '';
            return redirect('/admin-article')->with('gagal', 'data tidak boleh kosong');
        }

        $article->save();
        return redirect('/admin-article')->with('sukses', 'Artikel berhasil ditambahkan');
    }

    public function update(Request $request, $id) 
    {
        $article = Article::find($id);
        $tempImage = $article->image;

        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->tanggal = $request->input('tanggal');
        $article->image_caption = $request->input('image_caption');
        $article->image = $request->input('image');
        $article->content = $request->input('content');
        // $article->content2 = $request->input('content2');
        // $article->content3 = $request->input('content3');
        // $article->content4 = $request->input('content4');
        // $article->content5 = $request->input('content5');
        // $article->content6 = $request->input('content6');
        // $article->content7 = $request->input('content7');
        for ($i = 2; $i < 25; $i++) {
            $subjudul = "subjudul$i";
            $content = "content$i";
            $article->$content = $request->input($content);
            $article->$subjudul = $request->input($subjudul);
        }
        $article->date = Carbon::now();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/article_event/', $filename);
            $article->image = $filename;
        } else {
            $article->image = $tempImage;
            // return redirect('/admin-article')->with('gagal', 'data tidak boleh kosong');
        }

        $article->save();
        return redirect('/admin-article')->with('sukses_update', 'Artikel berhasil diupdate');
    }

    public function destroy($id) {
        $article = Article::find($id);
        $article->delete($article);
        $data = $article->title;
        // $img = $article->image;
        // unlink(public_path('uploads/article_event/' . $img));
        return redirect('/admin-article')->with('sukses_delete', $data);
    }
    
}
