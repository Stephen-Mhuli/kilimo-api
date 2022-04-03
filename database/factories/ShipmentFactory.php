<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name'=> $this->faker->company(),
            'phone_number'=> $this->faker->phoneNumber(),
            'shipment_price'=>$this->faker->numerify()
        ];
    }
}
