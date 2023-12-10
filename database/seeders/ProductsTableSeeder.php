<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'PRDCT20231126-0001',
                'name' => 'Pencil',
                'brand' => 'Mongol',
                'stock' => 150,
                'reorder' => 0,
                'price' => '50.00',
                'pricing_id' => 2,
                'size' => NULL,
                'unit_id' => 13,
                'category_id' => 6,
                'created_at' => '2023-11-26 11:23:52',
                'updated_at' => '2023-11-26 18:23:41',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'PRDCT20231126-0002',
                'name' => 'Ballpen',
                'brand' => 'Rotring',
                'stock' => 19,
                'reorder' => 0,
                'price' => '200.00',
                'pricing_id' => 2,
                'size' => NULL,
                'unit_id' => 13,
                'category_id' => 6,
                'created_at' => '2023-11-26 11:25:42',
                'updated_at' => '2023-11-26 18:52:31',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'PRDCT20231126-0003',
                'name' => 'Notebook',
                'brand' => 'Sterling',
                'stock' => 50,
                'reorder' => 0,
                'price' => '20.00',
                'pricing_id' => 2,
                'size' => NULL,
                'unit_id' => 13,
                'category_id' => 6,
                'created_at' => '2023-11-26 11:26:29',
                'updated_at' => '2023-11-26 15:12:14',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'PRDCT20231126-0004',
                'name' => 'Eraser',
                'brand' => 'Deli',
                'stock' => 75,
                'reorder' => 0,
                'price' => '50.00',
                'pricing_id' => 2,
                'size' => NULL,
                'unit_id' => 13,
                'category_id' => 6,
                'created_at' => '2023-11-26 11:27:49',
                'updated_at' => '2023-11-26 15:12:14',
            ),
        ));
        
        
    }
}