<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'nama' => 'Luri',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'surabaya',
            'jenis_kelamin' => 'P',
        ]);
        Users::create([
            'nama' => 'Andre',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'sidoarjo',
            'jenis_kelamin' => 'L',
        ]);
    }
}
