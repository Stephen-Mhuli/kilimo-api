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
            'role_id' => '2',
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('@customer'),
        ]);
    }
}
