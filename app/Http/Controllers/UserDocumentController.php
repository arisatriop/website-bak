<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class UserDocumentController extends Controller
{
    public function index() {
        $document = Document::all();
        return view('document', compact('document'));
    }
}
