<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all()->sortDesc();
        return view('admin.event', compact('event'));
    }

    public function create(Request $request)
    {
        $event = new Event();

        $event->title = $request->input('title');
        $event->image = $request->input('image');
        $event->description = $request->input('description');
        $event->date = Carbon::now();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $event->image = $filename;
        } else {
            $event->image = '';
            return redirect('/admin-event')->with('gagal', 'data tidak boleh kosong');
        }

        $event->save();
        return redirect('/admin-event')->with('sukses', 'Event berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->image = $request->input('image');
        $event->description = $request->input('description');
        $event->date = Carbon::now();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(0, 99999999) . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
            $event->image = $filename;
        } else {
            $event->image = '';
            return redirect('/admin-event')->with('gagal', 'data tidak boleh kosong');
        }

        $event->save();
        return redirect('/admin-event')->with('sukses_update', 'Event berhasil diupdate');
    }

    public function destroy($id) 
    {
        $event = Event::find($id);
        $event->delete($event);
        $data = $event->title;
        return redirect('/admin-event')->with('sukses_delete' , $data);
    }
    
}
