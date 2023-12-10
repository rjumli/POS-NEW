<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suppliers')->delete();
        
        \DB::table('suppliers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home Depot',
                'is_active' => 1,
                'created_at' => '2023-11-21 18:40:13',
                'updated_at' => '2023-11-21 18:40:13',
            ),
        ));
        
        
    }
}