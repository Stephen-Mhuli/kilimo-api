<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()->times(count: 5)->create();
    }
}
