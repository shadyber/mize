<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('item_categories')->insert([
            'title' => 'Spices',
            'detail' => 'recipy and ingredients made by ethiopian',

        ]);
        //
        \DB::table('item_categories')->insert([
            'title' => 'Baltina',
            'detail' => 'Cultural Baltina from Ethiopia',

        ]);

       \DB::table('item_categories')->insert([
            'title' => 'Pottery',
            'detail' => 'Ethiopian pottery',

        ]);

    }
}
