<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\isiContent;

class ContentController extends Controller
{
    public function index(){
        return view('beranda', [
            "isiContent" => isiContent::all()
    
        ]);
    }

    public function show($slug){
        return view('konten', [
            "content" => isiContent::find($slug)
        ]);
    }
}
