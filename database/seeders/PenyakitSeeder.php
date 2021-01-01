<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::create([
            'nama' => 'demam',
        ]);
        Penyakit::create([
            'nama' => 'diare',
        ]);
        Penyakit::create([
            'nama' => 'influenza',
        ]);
        Penyakit::create([
            'nama' => 'batuk',
        ]);
        Penyakit::create([
            'nama' => 'stroke',
        ]);
        Penyakit::create([
            'nama' => 'diabetes',
        ]);
        Penyakit::create([
            'nama' => 'hipertensi',
        ]);
        Penyakit::create([
            'nama' => 'hipotensi',
        ]);
        Penyakit::create([
            'nama' => 'hepatitis',
        ]);
        Penyakit::create([
            'nama' => 'tuberkulosis',
        ]);
        Penyakit::create([
            'nama' => 'cacar air',
        ]);
        Penyakit::create([
            'nama' => 'covid-19',
        ]);
        Penyakit::create([
            'nama' => 'muntaber',
        ]);
        Penyakit::create([
            'nama' => 'tifus',
        ]);
        Penyakit::create([
            'nama' => 'pneumonia',
        ]);
        Penyakit::create([
            'nama' => 'tetanus',
        ]);
        Penyakit::create([
            'nama' => 'migrain',
        ]);
        Penyakit::create([
            'nama' => 'rematik',
        ]);
        Penyakit::create([
            'nama' => 'maag',
        ]);
        Penyakit::create([
            'nama' => 'asma',
        ]);
        Penyakit::create([
            'nama' => 'bronkitis',
        ]);
        Penyakit::create([
            'nama' => 'difteri',
        ]);
        Penyakit::create([
            'nama' => 'jamur kulit',
        ]);
        Penyakit::create([
            'nama' => 'kanker',
        ]);
        Penyakit::create([
            'nama' => 'leukimia',
        ]);

    }
}
