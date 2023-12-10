<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_lists')->delete();
        
        \DB::table('order_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => '50.00',
                'quantity' => 100,
                'product_id' => 1,
                'status_id' => 8,
                'order_id' => 1,
                'created_at' => '2023-11-26 11:30:15',
                'updated_at' => '2023-11-26 11:30:29',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => '200.00',
                'quantity' => 100,
                'product_id' => 2,
                'status_id' => 8,
                'order_id' => 1,
                'created_at' => '2023-11-26 11:30:15',
                'updated_at' => '2023-11-26 11:30:36',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => '20.00',
                'quantity' => 100,
                'product_id' => 3,
                'status_id' => 8,
                'order_id' => 1,
                'created_at' => '2023-11-26 11:30:15',
                'updated_at' => '2023-11-26 11:50:15',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => '50.00',
                'quantity' => 100,
                'product_id' => 4,
                'status_id' => 8,
                'order_id' => 1,
                'created_at' => '2023-11-26 11:30:15',
                'updated_at' => '2023-11-26 11:50:19',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => '50.00',
                'quantity' => 150,
                'product_id' => 1,
                'status_id' => 8,
                'order_id' => 2,
                'created_at' => '2023-11-26 18:00:43',
                'updated_at' => '2023-11-26 18:23:41',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => '50.00',
                'quantity' => 5,
                'product_id' => 1,
                'status_id' => 7,
                'order_id' => 3,
                'created_at' => '2023-11-26 18:41:43',
                'updated_at' => '2023-11-26 18:41:43',
            ),
        ));
        
        
    }
}