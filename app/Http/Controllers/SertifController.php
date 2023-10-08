<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use setasign\Fpdi;
use Spatie\PdfToImage\Pdf;

class SertifController extends Controller
{
    public function showsertif(){
        $datas = DB::table('sertifikat1')->get();
        // dd($datas);

        return view('sertifikat.index', compact('datas'), [ 
            'title' => 'Sertifikat Event'
        ]);
    }

    public function generate(){
        // Tentukan lokasi gambar PNG yang ingin Anda konversi
        $pngImagePath = public_path('templateSertif/example.png');
        
        // Tentukan lokasi file PDF yang akan dihasilkan
        $pdfPath = public_path('pdfs/converted.pdf');

        // Buat objek PDF dari gambar PNG
        $pdf = new Pdf($pngImagePath);

        // Simpan gambar PNG sebagai file PDF
        $pdf->saveAs($pdfPath);

        // Pengembalian file PDF yang telah dihasilkan
        return response()->download($pdfPath)->deleteFileAfterSend(true);
    }
}
