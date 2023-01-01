<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->company(),
            'pemilik' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_hp' => $this->faker->numerify('08'.'##########'),
            'x' => $this->faker->latitude(),
            'y' => $this->faker->longitude(),
            'jam_buka' => $this->faker->time(),
            'jam_tutup' => $this->faker->time(),
        ];
    }
}
