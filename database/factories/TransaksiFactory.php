<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'berat' => mt_rand(1,5),
            'nama_toko' => $this->faker->company(),
            // 'toko_id' => mt_rand(1,30),
            'token' => Str::random(6),
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ];
    }
}
