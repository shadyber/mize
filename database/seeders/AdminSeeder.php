<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@sandhstore.com',

            'password' => bcrypt('password'),
            'email_verified_at' =>'2021-11-11 11:11:11',

        ]);
    }
}
