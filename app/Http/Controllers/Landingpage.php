<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingpage extends Controller
{
    //
    public function index()
    {
        return view('landingpage.landingpage', [
            'title' => 'Landing Page'
        ]);
    }
}
