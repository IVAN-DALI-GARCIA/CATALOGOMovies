<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this -> faker -> word(),
            'synopsis' => $this->faker->paragraph(),
            'year' => $this->faker->randomNumber(5,true),
            'cover' => $this->faker->word(),
        ];
    }
}