<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use PDF;

class SertifController extends Controller
{
    public function showsertif(){
        $datas = DB::table('sertifikat1')->get();
        // dd($datas);

        return view('sertifikat.index', compact('datas'), [ 
            'title' => 'Sertifikat Event'
        ]);
    }

    public function generate($id){
        $sertifikat = DB::table('sertifikat1')->where('id', $id)->first();

        if ($sertifikat) {
            $nama = $sertifikat->nama;
            $instansi = $sertifikat->instansi;

            // Path menuju gambar template PNG
            $templateImage = public_path('template/templateSertif.png');
            

            $html = '<img src="' . $templateImage . '" style="width:100%;" />';
            $html .= "<h1>Nama: $nama</h1><p>Instansi: $instansi</p>";
            
            $pdf = PDF::loadHTML($html);


            $filename = 'sertifikat_' . $nama . '.pdf';
            

            // Mengatur header HTTP untuk nama file
            return $pdf->stream($filename, array('Attachment' => 0));
        } else {
            return "Sertifikat tidak ditemukan.";
        }
    }
}
