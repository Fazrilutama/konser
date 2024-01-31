<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $e = event::where('status', 'active')->get();
        return view('home', compact('e'));
    }

    public function detail(event $event) {
        return view('detail', compact('event'));
    }
}
