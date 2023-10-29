<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class Eventcontroller extends Controller
{
    //
    public function index()
    {
        return view('event.index', [
            'title' => 'Event',
            'isiEvent' => Event::all()
        ]);
    }

    public function show( Event $isiEvent){
        return view('event.isievent', [
            "event" => $isiEvent,
            'title' => 'Event'
        ]);
    }

    public function showsertif(){
        return view('comingsoon', [
            'title' => 'Sertifikat Event'
        ]);
    }
}
