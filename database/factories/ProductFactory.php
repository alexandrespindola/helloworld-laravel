<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Amazing', 'Incredible', 'Fantastic']) . ' ' .
                $this->faker->word . ' ' .
                $this->faker->randomElement(['Product', 'Item', 'Good']),
            'short_description' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(1, 500),
        ];
    }
}
