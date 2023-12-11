<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dropdowns')->delete();
        
        \DB::table('dropdowns')->insert(array (
            0 => 
            array (
                'classification' => 'n/a',
                'color' => 'n/a',
                'id' => 1,
                'name' => 'n/a',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            1 => 
            array (
                'classification' => 'Pricing',
                'color' => 'n/a',
                'id' => 2,
                'name' => 'Fixed Price',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            2 => 
            array (
                'classification' => 'Pricing',
                'color' => 'n/a',
                'id' => 3,
                'name' => 'By unit',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            3 => 
            array (
                'classification' => 'Order',
                'color' => 'bg-warning',
                'id' => 4,
                'name' => 'Pending',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            4 => 
            array (
                'classification' => 'Order',
                'color' => 'bg-success',
                'id' => 5,
                'name' => 'Completed',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            5 => 
            array (
                'classification' => 'Order',
                'color' => 'bg-danger',
                'id' => 6,
                'name' => 'Cancelled',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            6 => 
            array (
                'classification' => 'Orderlist',
                'color' => 'bg-warning',
                'id' => 7,
                'name' => 'Pending',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            7 => 
            array (
                'classification' => 'Orderlist',
                'color' => 'bg-success',
                'id' => 8,
                'name' => 'Received',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            8 => 
            array (
                'classification' => 'Orderlist',
                'color' => 'bg-dark',
                'id' => 9,
                'name' => 'Not Available',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            9 => 
            array (
                'classification' => 'Orderlist',
                'color' => 'bg-danger',
                'id' => 11,
                'name' => 'Cancelled',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            10 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 12,
                'name' => 'Total Based',
                'others' => 'n/a',
                'type' => 'Based',
            ),
            11 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 13,
                'name' => 'Item Based',
                'others' => 'n/a',
                'type' => 'Based',
            ),
            12 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 14,
                'name' => 'Occasional',
                'others' => 'n/a',
                'type' => 'Based',
            ),
            13 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 15,
                'name' => 'Unlimited',
                'others' => 'n/a',
                'type' => 'Type',
            ),
            14 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 16,
                'name' => 'Limited',
                'others' => 'n/a',
                'type' => 'Type',
            ),
            15 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 17,
                'name' => 'Amount',
                'others' => 'n/a',
                'type' => 'Subtype',
            ),
            16 => 
            array (
                'classification' => 'Discount',
                'color' => 'bg-success',
                'id' => 18,
                'name' => 'Percentage',
                'others' => 'n/a',
                'type' => 'Subtype',
            ),
            17 => 
            array (
                'classification' => 'Payment',
                'color' => 'n/a',
                'id' => 19,
                'name' => 'Cash',
                'others' => 'n/a',
                'type' => 'Cash',
            ),
            18 => 
            array (
                'classification' => 'Payment',
                'color' => 'n/a',
                'id' => 20,
                'name' => 'Gcash',
                'others' => 'n/a',
                'type' => 'Online',
            ),
            19 => 
            array (
                'classification' => 'Payment',
                'color' => 'n/a',
                'id' => 21,
                'name' => 'Maya',
                'others' => 'n/a',
                'type' => 'Online',
            ),
            20 => 
            array (
                'classification' => 'Payment',
                'color' => 'n/a',
                'id' => 22,
                'name' => 'GrabPay',
                'others' => 'n/a',
                'type' => 'Online',
            ),
            21 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-warning',
                'id' => 23,
                'name' => 'Pending',
                'others' => 'text-warning',
                'type' => 'Sale',
            ),
            22 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-success',
                'id' => 24,
                'name' => 'Completed',
                'others' => 'text-success',
                'type' => 'Sale',
            ),
            23 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-danger',
                'id' => 25,
                'name' => 'Cancelled',
                'others' => 'text-danger',
                'type' => 'Sale',
            ),
            24 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-warning',
                'id' => 26,
                'name' => 'Pending',
                'others' => 'text-warning',
                'type' => 'Salelist',
            ),
            25 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-success',
                'id' => 27,
                'name' => 'Sold',
                'others' => 'text-success',
                'type' => 'Salelist',
            ),
            26 => 
            array (
                'classification' => 'Status',
                'color' => 'bg-danger',
                'id' => 28,
                'name' => 'Returned',
                'others' => 'text-danger',
                'type' => 'Salelist',
            ),
            27 => 
            array (
                'classification' => 'Product',
                'color' => 'n/a',
                'id' => 29,
                'name' => 'Specific Date',
                'others' => 'n/a',
                'type' => 'Discount',
            ),
            28 => 
            array (
                'classification' => 'Product',
                'color' => 'n/a',
                'id' => 30,
                'name' => 'Date Range',
                'others' => 'n/a',
                'type' => 'Discount',
            ),
            29 => 
            array (
                'classification' => 'Order',
                'color' => 'bg-info',
                'id' => 31,
                'name' => 'Incomplete',
                'others' => 'text-info',
                'type' => 'n/a',
            ),
            30 => 
            array (
                'classification' => 'Orderlist',
                'color' => 'bg-info',
                'id' => 32,
                'name' => 'Incomplete',
                'others' => 'n/a',
                'type' => 'n/a',
            ),
            31 => 
            array (
                'classification' => 'Reason',
                'color' => 'bg-danger',
                'id' => 33,
                'name' => 'Defectived',
                'others' => 'text-danger',
                'type' => 'n/a',
            ),
            32 => 
            array (
                'classification' => 'Reason',
                'color' => 'bg-info',
                'id' => 34,
                'name' => 'Good Condition',
                'others' => 'text-info',
                'type' => 'n/a',
            ),
            33 => 
            array (
                'classification' => 'Reason',
                'color' => 'bg-warning',
                'id' => 35,
                'name' => 'Duplicated',
                'others' => 'text-warning',
                'type' => 'n/a',
            ),
            34 => 
            array (
                'classification' => 'Reason',
                'color' => 'bg-success',
                'id' => 36,
                'name' => 'Refunded',
                'others' => 'text-success',
                'type' => 'n/a',
            ),
        ));
        
        
    }
}