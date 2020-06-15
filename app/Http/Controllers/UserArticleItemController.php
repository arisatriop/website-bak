<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class UserArticleItemController extends Controller
{
    public function index() 
    {
        
    }

    public function show(Article $ar)
    {
        return view('article-item', compact('ar'));
    }


}
