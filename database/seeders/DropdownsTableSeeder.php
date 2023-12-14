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
                'id' => 1,
                'name' => 'n/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fixed Price',
                'classification' => 'Pricing',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'By unit',
                'classification' => 'Pricing',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pending',
                'classification' => 'Order',
                'type' => 'n/a',
                'color' => 'bg-warning',
                'others' => 'n/a',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Completed',
                'classification' => 'Order',
                'type' => 'n/a',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cancelled',
                'classification' => 'Order',
                'type' => 'n/a',
                'color' => 'bg-danger',
                'others' => 'n/a',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Pending',
                'classification' => 'Orderlist',
                'type' => 'n/a',
                'color' => 'bg-warning',
                'others' => 'n/a',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Received',
                'classification' => 'Orderlist',
                'type' => 'n/a',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Not Available',
                'classification' => 'Orderlist',
                'type' => 'n/a',
                'color' => 'bg-dark',
                'others' => 'n/a',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Cancelled',
                'classification' => 'Orderlist',
                'type' => 'n/a',
                'color' => 'bg-danger',
                'others' => 'n/a',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Total Based',
                'classification' => 'Discount',
                'type' => 'Based',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Item Based',
                'classification' => 'Discount',
                'type' => 'Based',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Occasional',
                'classification' => 'Discount',
                'type' => 'Based',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Unlimited',
                'classification' => 'Discount',
                'type' => 'Type',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Limited',
                'classification' => 'Discount',
                'type' => 'Type',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Amount',
                'classification' => 'Discount',
                'type' => 'Subtype',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Percentage',
                'classification' => 'Discount',
                'type' => 'Subtype',
                'color' => 'bg-success',
                'others' => 'n/a',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Cash',
                'classification' => 'Payment',
                'type' => 'Cash',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Gcash',
                'classification' => 'Payment',
                'type' => 'Online',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Maya',
                'classification' => 'Payment',
                'type' => 'Online',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'GrabPay',
                'classification' => 'Payment',
                'type' => 'Online',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Pending',
                'classification' => 'Status',
                'type' => 'Sale',
                'color' => 'bg-warning',
                'others' => 'text-warning',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Completed',
                'classification' => 'Status',
                'type' => 'Sale',
                'color' => 'bg-success',
                'others' => 'text-success',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Cancelled',
                'classification' => 'Status',
                'type' => 'Sale',
                'color' => 'bg-danger',
                'others' => 'text-danger',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Pending',
                'classification' => 'Status',
                'type' => 'Salelist',
                'color' => 'bg-warning',
                'others' => 'text-warning',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Sold',
                'classification' => 'Status',
                'type' => 'Salelist',
                'color' => 'bg-success',
                'others' => 'text-success',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'Returned',
                'classification' => 'Status',
                'type' => 'Salelist',
                'color' => 'bg-danger',
                'others' => 'text-danger',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'Specific Date',
                'classification' => 'Product',
                'type' => 'Discount',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'Date Range',
                'classification' => 'Product',
                'type' => 'Discount',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'Incomplete',
                'classification' => 'Order',
                'type' => 'n/a',
                'color' => 'bg-info',
                'others' => 'text-info',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'Incomplete',
                'classification' => 'Orderlist',
                'type' => 'n/a',
                'color' => 'bg-info',
                'others' => 'n/a',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'Defectived',
                'classification' => 'Reason',
                'type' => 'customer',
                'color' => 'bg-danger',
                'others' => 'text-danger',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'Good Condition',
                'classification' => 'Reason',
                'type' => 'customer',
                'color' => 'bg-info',
                'others' => 'text-info',
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'Duplicated',
                'classification' => 'Reason',
                'type' => 'customer',
                'color' => 'bg-warning',
                'others' => 'text-warning',
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'Refunded',
                'classification' => 'Reason',
                'type' => 'n/a',
                'color' => 'bg-success',
                'others' => 'text-success',
            ),
        ));
        
        
    }
}