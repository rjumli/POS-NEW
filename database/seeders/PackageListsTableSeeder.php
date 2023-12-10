<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('package_lists')->delete();
        
        \DB::table('package_lists')->insert(array (
            0 => 
            array (
                'id' => 7,
                'quantity' => 20,
                'price' => '50.00',
                'total' => '1000.00',
                'product_id' => 1,
                'package_id' => 3,
                'created_at' => '2023-11-26 15:12:14',
                'updated_at' => '2023-11-26 15:12:14',
            ),
            1 => 
            array (
                'id' => 8,
                'quantity' => 15,
                'price' => '200.00',
                'total' => '3000.00',
                'product_id' => 2,
                'package_id' => 3,
                'created_at' => '2023-11-26 15:12:14',
                'updated_at' => '2023-11-26 15:12:14',
            ),
            2 => 
            array (
                'id' => 9,
                'quantity' => 10,
                'price' => '20.00',
                'total' => '200.00',
                'product_id' => 3,
                'package_id' => 3,
                'created_at' => '2023-11-26 15:12:14',
                'updated_at' => '2023-11-26 15:12:14',
            ),
            3 => 
            array (
                'id' => 10,
                'quantity' => 5,
                'price' => '50.00',
                'total' => '250.00',
                'product_id' => 4,
                'package_id' => 3,
                'created_at' => '2023-11-26 15:12:14',
                'updated_at' => '2023-11-26 15:12:14',
            ),
        ));
        
        
    }
}