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
            'product_name' => 'SmartPhone',
            'product_description' => 'a phone with size 300 by 700 which is very cheap',
            'product_price' => 230000,
            'product_category' => 'electronics',
            'product_quantity' => '3',
            'product_image' => 'some image',
            
        ]);
    }
}
