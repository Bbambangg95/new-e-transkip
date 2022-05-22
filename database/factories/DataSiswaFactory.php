<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataSiswa>
 */
class DataSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nisn' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'nis' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'asal' => $this->faker->city,
            'tanggal_lahir' => $this->faker->dateTimeBetween('-30 years', '-18 years'),
            'tahun_masuk' => $this->faker->year,
        ];
    }
}
