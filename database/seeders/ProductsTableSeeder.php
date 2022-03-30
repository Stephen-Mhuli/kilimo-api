<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            //'role_id' => '2',
            'name' => 'Smart TV',
            'description' => 'a TV with size 300 by 700 which is very cheap',
            'price' => 430000,
            'category' => 'electronics',
            'quantity' => '3',
            'image' => 'some image',

        ]);
    }
}
