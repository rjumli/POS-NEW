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
                'information' => 'Mongol Regular Pencils are sturdy, hexagonal/triangular in shape, made with premium wood and high quality graphite for extra smooth and readable performance.',
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
                'information' => 'About: Ceres Asia Marketing is the distributor of M&G Stationery and Zebra Co., Ltd. Japan in the Philippines. Ceres Asia Marketing is sister companies with Zebra & MG Stationery Products and Crystal Merchandising Inc. - the',
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
                'information' => 'Keep yourself organized. Our pocket journals can secure your random thoughts, passwords, and notes. You can place it in your pocket, small bag, or pouch. Limited stocks only. Grab yours now',
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
                'information' => 'I really trust Deli when it comes to office supplies',
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