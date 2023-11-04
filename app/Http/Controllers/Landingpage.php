<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingpage extends Controller
{
    //
    public function index()
    {
        return view('home.home', [
            'title' => 'Home'
        ]);
    }

    public function indexticykit()
    {
        return view('ticykit-home.index', [
            'title' => 'TicyKit'
        ]); 
    }
}
