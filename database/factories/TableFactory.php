<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'ProductName' => fake()->name(),
                'Color' => fake()->colorName(),
                'Category' => fake()->Name(),
                'Price' => fake()->numberBetween(0,20000)
        ];
    }
}
