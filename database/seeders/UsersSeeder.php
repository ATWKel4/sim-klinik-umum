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
            'nama' => 'dummy',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'dummy',
            'jenis_kelamin' => 'L',
        ]);
    }
}
