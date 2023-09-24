<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\isiContent;

class ContentController extends Controller
{
    public function index(){

        $isiContent = isiContent::paginate(12);

        return view('beranda', [
            "isiContent" => $isiContent,
            'title' => 'Koleksi'
        ]);
    }

    public function show( isiContent $isiContent){
        return view('konten', [
            "content" => $isiContent,
            'title' => 'Koleksi'
        ]);
    }

    public function filter(Request $request)
    {
        $category = $request->input('category');
        $kelas = $request->input('kelas');
        
        $isiContent = isiContent::query();
    
        if ($category) {
            $isiContent->where('category', $category);
        }
        
        if ($kelas) {
            $isiContent->where('kelas', $kelas);
        }
    
        $isiContent = $isiContent->get();
    
        return view('content', compact('isiContent'));


    // $category = $request->category;

    // if ($category) {
    //     $isiContent = isiContent::where('category', $category)->get();
    // } else {
    //     $isiContent = isiContent::all();
    // }

    // return view('beranda', [
    //     "isiContent" => isiContent::all(),
    //     'title' => 'Koleksi'
    // ]);
    }

    public function download($id)
    {
        $filedownload = isiContent::where('id', $id)->first();
        $pathToFile = public_path("file/{$filedownload->file}");
        return \Response::download($pathToFile);
    }


}
