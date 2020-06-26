<?php

namespace App\Http\Controllers;

use App\Article;
use App\Event;
use Illuminate\Http\Request;

class UserArticleItemController extends Controller
{
    public function index() 
    {
        
    }

    public function show(Article $ar)
    {
        $article_data = Article::all()->sortDesc()->take(5);
        $event_data = Event::all()->sortDesc()->take(5);
        return view('article-item', compact('ar', 'article_data', 'event_data'));
    }


}
