<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'nama' => 'dummy',
            'kegunaan' => 'dummy',
            'dosis' => 'dummy',
            'kategori' => 'dummy',
            'harga' => 1000,
            'stock' => 1,
            'aturan_pakai' => 'dummy',
            'tanggal_kadaluarsa' => '2020-12-12',
        ]);

    }
}
