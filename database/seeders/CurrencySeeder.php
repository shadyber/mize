<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \DB::table('currencies')->insert([
                    'name' => 'United State Dollar',
                    'slug' => 'usd',
                    'usd_rate' => 1.00,

                ]);

            \DB::table('currencies')->insert([
                    'name' => 'Ethiopian Birr',
                    'slug' => 'etb',
                    'usd_rate' => 0.02,

                ]);
    }
}
