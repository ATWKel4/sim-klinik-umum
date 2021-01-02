<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'resep_id' => 1,
            'harga_total' => 30000,
            'catatan' => 'Sudah terbayarkan tuntas',
            'status' => 'Terbayarkan',
            'tanggal_pembayaran' => '2020-12-12',
        ]);
        Invoice::create([
            'resep_id' => 2,
            'harga_total' => 10000,
            'catatan' => 'Sudah terbayarkan tuntas',
            'status' => 'Terbayarkan',
            'tanggal_pembayaran' => '2020-12-12',
        ]);
        Invoice::create([
            'resep_id' => 1,
            'harga_total' => 9000,
            'catatan' => 'Sudah terbayarkan tuntas',
            'status' => 'Terbayarkan',
            'tanggal_pembayaran' => '2020-12-12',
        ]);
        Invoice::create([
            'resep_id' => 2,
            'harga_total' => 10000,
            'catatan' => 'Sudah terbayarkan tuntas',
            'status' => 'Terbayarkan',
            'tanggal_pembayaran' => '2020-12-12',
        ]);
        Invoice::create([
            'resep_id' => 3,
            'harga_total' => 4000,
            'catatan' => 'Sudah terbayarkan tuntas',
            'status' => 'Terbayarkan',
            'tanggal_pembayaran' => '2020-12-12',
        ]);
    }
}
