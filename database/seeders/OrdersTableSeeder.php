<?php

namespace Database\Seeders;

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
        DB::table('orders')->insert([
            'order_date' => '12-10-2019',
            'order_description' => 'order made today',
            'order_total' => 199.80,
            'user_id' => 4,
            'payment_id' => 25,

        ]);
    }
}
