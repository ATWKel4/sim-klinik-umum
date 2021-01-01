<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Antrian;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Antrian::create([
            'jadwal_id' => '1',
            'users_id' => '1',
            'is_finished' => true,
        ]);
        Antrian::create([
            'jadwal_id' => '2',
            'users_id' => '1',
            'is_finished' => true,
        ]);
        Antrian::create([
            'jadwal_id' => '2',
            'users_id' => '2',
            'is_finished' => true,
        ]);
        Antrian::create([
            'jadwal_id' => '2',
            'users_id' => '3',
            'is_finished' => false,
        ]);
        Antrian::create([
            'jadwal_id' => '2',
            'users_id' => '4',
            'is_finished' => false,
        ]);
    }
}
