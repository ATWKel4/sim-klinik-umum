<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tindakan;

class TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tindakan::create([
            'diagnosis' => 'dummy',
            'deskripsi' => 'dummy',
        ]);
    }
}
