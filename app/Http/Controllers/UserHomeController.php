<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index() {
        $web_titles = \App\WebTitle::all();
        $home_images = \App\Home::all();
        $about_bak = \App\About::all();
        $article = \App\Article::all()->sortDesc()->take(2);
        $event_satu = \App\Event::all()->sortDesc()->take(1);
        $event_dua = \App\Event::all()->sortDesc()->skip(1)->take(1);
        $persons = \App\Testimony::all();


        return view('index', compact('web_titles', 'home_images', 'about_bak', 'article', 'event_satu', 'event_dua', 'persons'));
    }

    public function inbox(Request $request) {
        $inbox = new \App\Inbox();
        $inbox->name = $request->input('name');
        $inbox->phone = $request->input('phone');
        $inbox->subject = $request->input('subject');
        $inbox->message = $request->input('message');

        $inbox->save();

        return redirect('/');
    }
    
}
