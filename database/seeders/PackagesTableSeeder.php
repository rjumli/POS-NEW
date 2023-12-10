<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 3,
                'code' => 'PCKG20231126-0001',
                'name' => 'Back to School',
                'price' => '4450.00',
                'stock' => 4,
                'information' => 'adsa',
                'is_available' => 0,
                'category_id' => 1,
                'created_at' => '2023-11-26 15:12:14',
                'updated_at' => '2023-11-26 19:32:01',
            ),
        ));
        
        
    }
}