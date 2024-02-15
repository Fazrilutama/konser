<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //
    public function owner () {
        $events = event::all();
        return view('owner', compact('events'));    }
}
