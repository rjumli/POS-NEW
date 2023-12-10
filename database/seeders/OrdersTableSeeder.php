<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'ORDER20231126-0001',
                'total' => '32000.00',
                'status_id' => 5,
                'supplier_id' => 1,
                'created_at' => '2023-11-26 11:30:15',
                'updated_at' => '2023-11-26 11:50:19',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'ORDER20231126-0002',
                'total' => '7500.00',
                'status_id' => 5,
                'supplier_id' => 1,
                'created_at' => '2023-11-26 18:00:43',
                'updated_at' => '2023-11-26 18:23:41',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'ORDER20231126-0003',
                'total' => '250.00',
                'status_id' => 4,
                'supplier_id' => 1,
                'created_at' => '2023-11-26 18:41:43',
                'updated_at' => '2023-11-26 18:41:43',
            ),
        ));
        
        
    }
}