<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;

class UserArticleController extends Controller
{
    public function index() {
        $article_main = Article::all()->sortDesc()->take(1);
        $article_second = Article::all()->sortDesc()->skip(1)->take(2);
        $article_row1 = Article::all()->sortDesc()->skip(3)->take(4);
        $article_row2 = Article::all()->sortDesc()->skip(7)->take(4);
        $article_mobile = Article::all()->sortDesc()->skip(3)->take(5);

        $event_main = Event::all()->sortDesc()->take(1);
        $event_row1 = Event::all()->sortDesc()->skip(1)->take(2);
        $event_row2 = Event::all()->sortDesc()->skip(3)->take(2);
        return view('article', compact('article_main', 'article_second', 'article_row1', 'article_row2', 'article_mobile', 'event_main', 'event_row1', 'event_row2'));
    }
}
