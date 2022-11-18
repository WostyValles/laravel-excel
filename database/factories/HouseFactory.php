<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'title' => $this->faker->word(),
                'content' => $this->faker->paragraph(),
                'color' => $this->faker->colorName(),
                'phone' => $this->faker->phoneNumber(),
                'author' => $this->faker->name(),
                'author_age' => $this->faker->numberBetween(20, 100)
        ];
    }
}
