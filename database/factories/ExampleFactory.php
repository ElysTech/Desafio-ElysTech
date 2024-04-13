<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Example>
 */
class ExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'altura' => fake()->numberBetween(1.00, 1.70),
            'genero' => fake()->randomElement(['M', 'F']),
            'peso' => fake()->numberBetween(50, 200),
            'isActive' => fake()->boolean()
        ];
    }
}
