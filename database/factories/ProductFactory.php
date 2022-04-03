<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->title(),
            'price' => $this->faker->numerify(),
            'quantity' => $this->faker->numerify(),
            'image' => $this->faker->image(),

        ];
    }
}
