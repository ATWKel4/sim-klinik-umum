<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'tanggal' => '2020-12-12',
            'waktu' => '12:12:12',
        ]);
        Jadwal::create([
            'tanggal' => '2020-12-12',
            'waktu' => '20:20:20',
        ]);
        Jadwal::create([
            'tanggal' => '2020-12-14',
            'waktu' => '12:12:12',
        ]);
    }
}
