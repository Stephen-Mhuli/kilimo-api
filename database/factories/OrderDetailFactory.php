<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_quantity'=>$this->faker->numerify(),
            'order_total'=>$this->faker->numerify()
        ];
    }
}
