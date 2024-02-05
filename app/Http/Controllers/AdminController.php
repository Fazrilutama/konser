<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function events(){
        $events = event::all();
        return view('admin', compact('events'));
    }

    public function updateEventStatus(event $event, Request $request){
        $request->validate([
            'status'=>'required',
        ]);

        $event->update([
            'status'=> $request->status,
        ]);

        return redirect()->route('admin');
    }

    public function tambah(){
        return view('crud.tambah');
    }

    public function postTambah(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'deskripsi'=>'required',
            'date'=>'required',
            'stock'=>'required',
            'time'=>'required',
            'location'=>'required',
            'venue'=>'required',
            'price'=>'required',
            'status'=>'required',
        ]);

        event::create([
            'name'=>$request->name,
            'image'=>$request->image->store('img'),
            'deskripsi'=>$request->deskripsi,
            'date'=>$request->date,
            'stock'=>$request->stock,
            'time'=>$request->time,
            'location'=>$request->location,
            'venue'=>$request->venue,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);

        return redirect()->route('admin');
        
    }
}
