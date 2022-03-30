<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Customer',
            'role_slug' => 'customer',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Seller',
            'role_slug' => 'seller',
        ]);
    }
}
