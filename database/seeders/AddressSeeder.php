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
            'tel' => '+25191255',
            'tel2' =>' 0911......',
            'email' => 'admin@mize.com',
            'email2' =>'info@mize.com',
            'address1' => 'Addis ababab , ',
            'address2' => 'Ethiopia',
        ]);
    }
}
