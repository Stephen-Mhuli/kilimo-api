<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount'=>$this->faker->numerify(),
            'payment_type'=>$this->faker->text(10),
            'payment_status'=>$this->faker->text(5),
        ];
    }
}
