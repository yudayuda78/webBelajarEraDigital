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

    public function show( isiContent $isiContent){
        return view('konten', [
            "content" => $isiContent
        ]);
    }

    public function filter(Request $request)
    {
    $category = $request->category;

    if ($category) {
        $isiContent = isiContent::where('category', $category)->get();
    } else {
        $isiContent = isiContent::all();
    }

    return view('beranda', [
        "isiContent" => $isiContent
    ]);
    }



}
