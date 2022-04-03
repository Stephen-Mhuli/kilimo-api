<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(ShipmentsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(LaratrustSeeder::class);
    }
}
