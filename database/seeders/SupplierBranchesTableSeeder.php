<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierBranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplier_branches')->delete();
        
        \DB::table('supplier_branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Icc',
                'address' => 'guiwan aurora village',
                'contact_person' => 'krad jumli',
                'contact_number' => '09123654789',
                'email' => 'kradjumli@gmail.com',
                'is_main' => 1,
                'is_active' => 1,
                'supplier_id' => 1,
                'created_at' => '2023-11-21 18:40:32',
                'updated_at' => '2023-11-21 18:40:32',
            ),
        ));
        
        
    }
}