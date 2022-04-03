<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory()->times(count: 5)->create();
    }
}
