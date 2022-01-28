<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'detail' => 'About Us',
            'photo' =>'/assets/images/about/01.png',
            'mission' =>' ',
            'vision' =>' ',
            'value' =>' ',

        ]);
    }
}
