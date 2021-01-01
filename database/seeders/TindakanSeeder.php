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
            'diagnosis' => 'demam',
            'deskripsi' => 'suhu badan sangat tinggi',
        ]);
        Tindakan::create([
            'diagnosis' => 'influenza',
            'deskripsi' => 'suhu badan tinggi, batuk ringan',
        ]);
        Tindakan::create([
            'diagnosis' => 'batuk',
            'deskripsi' => 'batuk berdahak',
        ]);
        Tindakan::create([
            'diagnosis' => 'cacar air',
            'deskripsi' => 'demam, sakit tenggorokan, ruam kemerahan, selera makan menurun',
        ]);
        Tindakan::create([
            'diagnosis' => 'tuberkulosis',
            'deskripsi' => 'sesak napas, nyeri dada saat batuk, batuk berdarah',
        ]);
        Tindakan::create([
            'diagnosis' => 'hipertensi',
            'deskripsi' => 'sakit kepala, lemas, nyeri dada',
        ]);
        Tindakan::create([
            'diagnosis' => 'hipotensi',
            'deskripsi' => 'pusing, mual, pandangan buram',
        ]);
    }
}
