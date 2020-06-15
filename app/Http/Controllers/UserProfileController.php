<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function ph() {
        return view('ph');
    }

    public function audit()
    {
        return view('audit');
    }

    public function psdm()
    {
        return view('psdm');
    }

    public function litbang()
    {
        return view('litbang');
    }
}
