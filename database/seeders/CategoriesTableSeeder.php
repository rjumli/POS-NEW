<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Appliances',
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Automotive Accessories',
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Electronics ',
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Fashions',
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Furniture',
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Grocery',
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Utensils
',
                'is_active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Construction
',
                'is_active' => 1,
            ),
        ));
        
        
    }
}