<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Visi;
use App\Misi;

class UserAboutController extends Controller
{
    public function index() 
    {
        $sejarah = About::all();
        $visi = Visi::all();
        $misi = Misi::all();
        return view('about', compact('sejarah', 'visi', 'misi'));
    }


}
