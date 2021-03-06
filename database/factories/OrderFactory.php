<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_total' => $this->faker->numerify(),
            'order_description' => $this->faker->text(10),
            'order_quantity'=>$this->faker->numerify(),
            
        ];
    }
}
