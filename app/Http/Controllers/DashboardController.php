<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\UserChart;

class DashboardController extends Controller
{
    public function index()
    {
        $user_1 = $this->user(1);
        $user_2 = $this->user(2);
        $user_3 = $this->user(3);
        $user_4 = $this->user(4);
        $user_5 = $this->user(5);
        $user_6 = $this->user(6);
        $user_7 = $this->user(7);

        $gaji_1 = $this->gaji(1);
        $gaji_2 = $this->gaji(2);
        $gaji_3 = $this->gaji(3);
        $gaji_4 = $this->gaji(4);
        $gaji_5 = $this->gaji(5);
        $gaji_6 = $this->gaji(6);
        $gaji_7 = $this->gaji(7);
        
        $usersChart = new UserChart;
        $usersChart->labels(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu']);
        $usersChart->dataset('Pasien dalam 1 minggu terakhir', 'line', [$user_1, $user_2, $user_3, $user_4, $user_5, $user_6, $user_7]);
        
        $pendapatanChart = new UserChart;
        $pendapatanChart->labels(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu']);
        $pendapatanChart->dataset('Pendapatan dalam 1 minggu terakhir', 'bar', [$gaji_1, $gaji_2, $gaji_3, $gaji_4, $gaji_5, $gaji_6, $gaji_7]);
        
        $antrian= $this->antrian();
        $total_pasien = $this->allUser();
        $total_jenis_obat = $this->allObat();
        $total_pendapatan = $this->allPendapatan();
        return view('admin.main.dashboard', 
            [ 'usersChart' => $usersChart,
                'pendapatanChart' => $pendapatanChart,
                'antrian' => $antrian,
                'total_pasien' => $total_pasien,
                'total_jenis_obat' => $total_jenis_obat,
                'total_pendapatan' => $total_pendapatan
              ] );
    }

    private function gaji($day)
    {
        $gaji = DB::table('rekam')
                ->leftJoin('resep', 'rekam.resep_id','=', 'resep.id')
                ->leftJoin('invoice', 'resep.id', '=', 'invoice.resep_id')
                ->where('rekam.jadwal_id', '=', $day)
                ->get();
        $sum = $gaji->sum('harga_total');
        return $sum;
    }

    private function user($day)
    {
        $user = DB::table('rekam')->where('jadwal_id', '=', $day)->get();
        $count= $user->count();
        return $count;
    }

    private function allUser()
    {
        $user = DB::table('rekam')->get();
        $count= $user->count();
        return $count;
    }

    private function allObat()
    {
        $obat = DB::table('obat')->get();
        $count= $obat->count();
        return $count;
    }

    private function allPendapatan()
    {
        $gaji = DB::table('rekam')
                ->leftJoin('resep', 'rekam.resep_id','=', 'resep.id')
                ->leftJoin('invoice', 'resep.id', '=', 'invoice.resep_id')
                ->get();
        $count= $gaji->sum('harga_total');
        return $count;
    }

    private function antrian()
    {
        $nomor = DB::table('antrian')
            ->where('jadwal_id', '=', 2)
            ->where('is_finished', '=', true)
            ->get();
        return $nomor->count();
    }
}
