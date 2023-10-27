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
            $templateImage = public_path('templateSertif/agus2.jpg');
            

//             $html ="<style> 
// @page {
//     margin-top:130px;
// }
// body {
    
//     background-color: red;
//     position: absolute;
//     left: 0px;
// }

// </style>";
            
            $html = '<img src="' . $templateImage . '" style="margin-top:-50px;margin-left:-50px;background-color:red;position:absolute; left:0px;max-width:115%; max-height:115%; z-index:10;" />';
            // $html .= '<h1 style="position:absolute">ayam<h1>';
            $html .= '<h3 style="position:absolute;left:50%;margin-left:-50px;top:110px;z-index:50; font-family:poppins; font-size:36px;">' . $nama . '</h3>';
            $html .= '<h5 style="position:absolute;left:50%;margin-left:-50px;top:130px;z-index:50; font-family:poppins; font-size:30px;">' .$instansi . '</h5>';
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
