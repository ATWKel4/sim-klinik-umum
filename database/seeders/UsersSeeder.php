<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'Luri',
            'password' => Hash::make('Luri'),
            'nama' => 'Luri',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'surabaya',
            'jenis_kelamin' => 'P',
        ]);
        Users::create([
            'username' => 'Andre',
            'password' => Hash::make('Andre'),
            'nama' => 'Andre',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'sidoarjo',
            'jenis_kelamin' => 'L',
        ]);
        Users::create([
            'username' => 'Nabila',
            'password' => Hash::make('Nabila'),
            'nama' => 'Nabila',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'sidoarjo',
            'jenis_kelamin' => 'L',
        ]);
        Users::create([
            'username' => 'Laily',
            'password' => Hash::make('Laily'),
            'nama' => 'Laily',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'sidoarjo',
            'jenis_kelamin' => 'L',
        ]);
        Users::create([
            'username' => 'Edo',
            'password' => Hash::make('Edo'),
            'nama' => 'Edo',
            'tanggal_lahir' => '2020-12-12',
            'alamat' => 'sidoarjo',
            'jenis_kelamin' => 'L',
        ]);

    }
}
