<?php

namespace Database\Factories;

use App\Enums\Color;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(rand(3, 8), true),
            'color' => Arr::random(Color::cases()),
            'duration' => rand(10, 60).' min',
        ];
    }
}
