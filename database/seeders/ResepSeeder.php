<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resep::create([
            'obat_id' => 1,
            'catatan' => 'kemungkinan demam tinggi',
        ]);
        Resep::create([
            'obat_id' => 3,
            'catatan' => 'minum jika diperlukan',
        ]);
        Resep::create([
            'obat_id' => 3,
            'catatan' => 'minum jika telah selesai makan',
        ]);
    }
}
