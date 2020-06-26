<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function ph() {
        $img = \App\DepartmentImages::all()->take(1);
        $ph = \App\Ph::all()->take(1);
        $phs = \App\Ph::all()->skip(1);
        $audit = \App\Audit::all()->take(1);
        $audits = \App\Audit::all()->skip(1);
        $psdm = \App\Psdm::all()->take(1);
        $psdms = \App\Psdm::all()->skip(1);
        $litbang = \App\Litbang::all()->take(1);
        $litbangs = \App\Litbang::all()->skip(1);
        return view('ph', compact('img', 'ph', 'audit', 'psdm', 'litbang', 'phs', 'audits', 'psdms', 'litbangs'));
    }

    public function audit()
    {
        $img = \App\DepartmentImages::all()->skip(1)->take(1);
        $ph = \App\Ph::all()->take(1);
        $phs = \App\Ph::all()->skip(1);
        $audit = \App\Audit::all()->take(1);
        $audits = \App\Audit::all()->skip(1);
        $psdm = \App\Psdm::all()->take(1);
        $psdms = \App\Psdm::all()->skip(1);
        $litbang = \App\Litbang::all()->take(1);
        $litbangs = \App\Litbang::all()->skip(1);
        return view('audit',
        compact('img', 'ph', 'audit', 'psdm', 'litbang', 'phs', 'audits', 'psdms', 'litbangs'));
    }

    public function psdm()
    {
        $img = \App\DepartmentImages::all()->skip(2)->take(1);
        $ph = \App\Ph::all()->take(1);
        $phs = \App\Ph::all()->skip(1);
        $audit = \App\Audit::all()->take(1);
        $audits = \App\Audit::all()->skip(1);
        $psdm = \App\Psdm::all()->take(1);
        $psdms = \App\Psdm::all()->skip(1);
        $litbang = \App\Litbang::all()->take(1);
        $litbangs = \App\Litbang::all()->skip(1);
        return view('psdm',
        compact('img', 'ph', 'audit', 'psdm', 'litbang', 'phs', 'audits', 'psdms', 'litbangs'));
    }

    public function litbang()
    {
        $img = \App\DepartmentImages::all()->skip(3)->take(1);
        $ph = \App\Ph::all()->take(1);
        $phs = \App\Ph::all()->skip(1);
        $audit = \App\Audit::all()->take(1);
        $audits = \App\Audit::all()->skip(1);
        $psdm = \App\Psdm::all()->take(1);
        $psdms = \App\Psdm::all()->skip(1);
        $litbang = \App\Litbang::all()->take(1);
        $litbangs = \App\Litbang::all()->skip(1);
        return view('litbang',
        compact('img', 'ph', 'audit', 'psdm', 'litbang', 'phs', 'audits', 'psdms', 'litbangs'));
    }
}
