<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'tel' => '',
            'tel2' =>' 0911......',
            'email' => 'admin@sandhstore.com',
            'email2' =>'info@sandhstore.com',
            'address1' => 'Addis ababab , ',
            'address2' => 'Ethiopia',
        ]);
    }
}
