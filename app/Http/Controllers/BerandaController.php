<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class BerandaController extends Controller
{
    public function index()
    {
        // NB: Pengambilan no antrian sementara tidak tergantung pada waktu
        $nomor = DB::table('antrian')
                    ->where('jadwal_id', '=', 2)
                    ->where('is_finished', '=', true)
                    ->get();
        return view('user.main.home', compact('nomor'));
    }

    public function printPDF()
    {
        // NB: Pengambilan no antrian sementara tidak tergantung pada waktu
        $nomor = DB::table('antrian')
                    ->where('jadwal_id', '=', 2)
                    ->where('is_finished', '=', true)
                    ->get();
 
    	$pdf = PDF::loadview('user.main.antrian_pdf',['nomor'=>$nomor]);
    	return $pdf->download('antrian-klinik-sehat');
    }
}
