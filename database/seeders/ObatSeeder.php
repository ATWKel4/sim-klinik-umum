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
            'nama' => 'Paracetamol',
            'kegunaan' => 'demam',
            'dosis' => '1 sdt',
            'kategori' => 'anak',
            'harga' => 15000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Sangobion',
            'kegunaan' => 'hipotensi',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 12000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2028-12-12',
        ]);
        Obat::create([
            'nama' => 'OBH Combi Kids',
            'kegunaan' => 'batuk',
            'dosis' => '1 sdm',
            'kategori' => 'anak',
            'harga' => 10000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2027-12-12',
        ]);
        Obat::create([
            'nama' => 'Simvastatine',
            'kegunaan' => 'stroke',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 25000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Captopril',
            'kegunaan' => 'hipertensi',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 15000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2028-12-12',
        ]);
        Obat::create([
            'nama' => 'Diapet',
            'kegunaan' => 'diare',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 8000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Bodrexin',
            'kegunaan' => 'influenza',
            'dosis' => '1 sdm',
            'kategori' => 'anak',
            'harga' => 12000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Rifampizin',
            'kegunaan' => 'tuberkulosis',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 35000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Calamine',
            'kegunaan' => 'cacar air',
            'dosis' => 'resep dokter',
            'kategori' => 'anak & dewasa',
            'harga' => 20000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Inhaler',
            'kegunaan' => 'asma',
            'dosis' => '200 mcg',
            'kategori' => 'dewasa',
            'harga' => 120000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2025-12-12',
        ]);
        Obat::create([
            'nama' => 'Pfizer',
            'kegunaan' => 'covid-19',
            'dosis' => 'resep dokter',
            'kategori' => 'dewasa',
            'harga' => 0,
            'stock' => 100,
            'aturan_pakai' => '1x1',
            'tanggal_kadaluarsa' => '2027-12-12',
        ]);
        Obat::create([
            'nama' => 'Promag',
            'kegunaan' => 'maag',
            'dosis' => '1 tablet',
            'kategori' => 'dewasa',
            'harga' => 11000,
            'stock' => 100,
            'aturan_pakai' => '2x1',
            'tanggal_kadaluarsa' => '2028-12-12',
        ]);
        Obat::create([
            'nama' => 'Ibuprofen',
            'kegunaan' => 'migrain',
            'dosis' => '1 sdm',
            'kategori' => 'anak',
            'harga' => 23000,
            'stock' => 100,
            'aturan_pakai' => '3x1',
            'tanggal_kadaluarsa' => '2028-12-12',
        ]);


    }
}
