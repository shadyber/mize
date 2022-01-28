<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Item;
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

        $this->call([
            AddressSeeder::class,
            AboutUsSeeder::class,
            CategorySeeder::class,
            AdminSeeder::class,
            RoleSeeder::class,
           PermisionSeeder::class,
            //RolePermisionSeeder::class,
            UserRoleSeeder::class,


        ]);

        \App\Models\User::factory(10)->create();
        Item::factory(30)->create();
        BlogCategory::factory(10)->create();
        Blog::factory(10)->create();

        //
    }
}
