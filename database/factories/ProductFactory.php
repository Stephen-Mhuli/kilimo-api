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
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'category' => $this->faker->title(),
            'price' => $this->faker->integer(),
            'quantity' => $this->faker->integer(),
            'photo' => $this->faker->image(),

        ];
    }
}
