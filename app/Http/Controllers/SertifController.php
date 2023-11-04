<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use PDF;

class SertifController extends Controller
{

    public function showabjad(){
        return view('sertifikat.abjad-sertif', [
            'title' => 'Sertifikat Event'
        ]);
    }

    public function showsertif(){
        $datas = DB::table('sertifikat1')->paginate(20);
        // dd($datas);
        // $data = data::paginate(20);

        return view('sertifikat.index', compact('datas'), [ 
            'title' => 'Sertifikat Event'
        ]);
    }

    public function search(Request $request){
        $search = $request->input('search');

        $datas = DB::table('sertifikat1')
                   ->where('nama', 'like', '%'.$search.'%')
                   ->orWhere('instansi', 'like', '%'.$search.'%')
                   ->paginate(20);
    
        return view('sertifikat.index', compact('datas', 'search'), [ 
            'title' => 'Sertifikat Event'
        ]);
    }

    public function generate($id){
        $sertifikat = DB::table('sertifikat1')->where('id', $id)->first();

        if ($sertifikat) {
            $nama = $sertifikat->nama;
            $instansi = $sertifikat->instansi;

            // Path menuju gambar template PNG
            $templateImage = public_path('templateSertif/nov1.jpg');
                        
            $html = '<img src="' . $templateImage . '" style="margin-top:-50px;margin-left:-50px;background-color:red;position:absolute; left:0px;max-width:115%; max-height:115%; z-index:10;" />';
            // $html .= '<h1 style="position:absolute">ayam<h1>';
            $html .= '<h3 style="text-align:center;margin-top:200px;z-index:50; font-family:poppins; font-size:36px;">' . $nama . '</h3>';
            $html .= '<h5 style="text-align:center;margin-top:-30px;z-index:50; font-family:poppins; font-size:30px;">' .$instansi . '</h5>';
            // dd($html);
            
            $pdf = PDF::loadHTML($html);


            $filename = 'sertifikat_' . $nama . '.pdf';
            

            // Mengatur header HTTP untuk nama file
            return $pdf->stream($filename, array('Attachment' => 0));
        } else {
            return "Sertifikat tidak ditemukan.";
        }
    }
}
