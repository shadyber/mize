<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);
    }
}
