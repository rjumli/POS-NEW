<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Krad Jumli',
                'contact' => '123654789',
                'email' => 'kradjumli@gmail.com',
                'is_active' => 1,
                'created_at' => '2023-11-21 21:43:54',
                'updated_at' => '2023-11-21 21:43:54',
            ),
        ));
        
        
    }
}