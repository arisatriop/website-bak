<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class UserEventItemController extends Controller
{
    public function index()
    {
        return view('event');
    }

    public function show(Event $event)
    {
        return view('event-item', compact('event'));
    }

  
}
