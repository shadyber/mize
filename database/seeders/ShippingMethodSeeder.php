<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_methods')->insert([
            'name' => 'No Shipping Required',
            'slug' => 'no-shiping',
            'detail' => 'No Shiping is Required Customer can Pick up from our store.',
            'price' => '0.00',
            'thumb' => '/images/shippping1.png',
        ]);


        \DB::table('shipping_methods')->insert([
            'name' => 'Standard Local Shipping  Method',
            'slug' => 'local-shiping',
            'detail' => 'Sheeping to Ethiopia.',
            'price' => '20.00',
            'thumb' => '/images/shippping2.png',
        ]);


        \DB::table('shipping_methods')->insert([
            'name' => 'Standard International Shipping  Method',
            'slug' => 'international-shiping',
            'detail' => 'Sheeping to Any Country.',
            'price' => '100.00',
            'thumb' => '/images/shippping3.png',
        ]);


    }
}
