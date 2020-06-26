<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Article;

class UserEventItemController extends Controller
{
    public function index()
    {
        
    }

    public function show(Event $event)
    {
        $article_data = Article::all()->sortDesc()->take(5);
        $event_data = Event::all()->sortDesc()->take(5);
        return view('event-item', compact('event', 'article_data', 'event_data'));
    }

}
