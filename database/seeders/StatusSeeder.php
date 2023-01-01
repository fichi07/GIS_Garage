<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status' => 'Diterima'
        ]);

        Status::create([
            'status' => 'Di Cuci'
        ]);

        Status::create([
            'status' => 'Di Jemur'
        ]);

        Status::create([
            'status' => 'Di Setrika'
        ]);

        Status::create([
            'status' => 'Selesai'
        ]);

    }
}
