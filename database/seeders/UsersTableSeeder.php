<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(count: 5)->create();






        // DB::table('users')->insert([
        //     'role_id' => '1',
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('@admin'),
        // ]);
        // DB::table('users')->insert([
        //     'role_id' => '2',
        //     'name' => 'Customer',
        //     'email' => 'customer@gmail.com',
        //     'password' => Hash::make('@customer'),
        // ]);
        // DB::table('users')->insert([
        //     'role_id' => '3',
        //     'name' => 'Seller',
        //     'email' => 'seller@gmail.com',
        //     'password' => Hash::make('@seller'),
        // ]);
    }
}
