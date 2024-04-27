<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estafes>
 */
class EstafesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'data_nascimento' => fake()->dateTime($startDate = '-70 years', $timezone = NULL)->format('Y-m-d'),
            'genero' => fake()->randomElement(['M', 'F', 'X']),
            'status' => 1,
        ];
    }
}
