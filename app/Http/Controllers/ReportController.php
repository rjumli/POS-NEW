<?php

namespace App\Http\Controllers;

use App\Models\SaleList;
use App\Models\OrderList;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request){
        $monday =  date("Y-m-d", strtotime("this week monday"));
        $sunday = date("Y-m-d", strtotime("this week sunday"));        
        $type = $request->type;
        switch($type){
            case 'sales':
                $subtype = $request->subtype;
                if($subtype == 'lists'){
                    $date = $request->date;
                    $d = (explode("to", $date));
                    $monday = str_replace(' ','',$d[0]);
                    $sunday = str_replace(' ','',$d[1]);
                    $monday =  date("Y-m-d", strtotime($monday));
                    $sunday = date("Y-m-d", strtotime($sunday));    

                    $sales = SaleList::with('product','sale.customer')->whereBetween('created_at', [$monday, $sunday])->where('status_id',27)->get();
                    
                    $lists = [];
                    if(count($sales) > 0){
                        foreach($sales as $sale){
                            $lists[] = [
                                'product' => $sale['product']['name'],
                                'type' => 'Sold',
                                'quantity' => $sale['quantity'],
                                'price'=> $sale['price'],
                                'customer' => $sale['sale']['customer']['name'],
                                'date' => $sale['created_at']
                            ];
                        }
                    }
                    return $lists;
                }else{
                    return inertia('Modules/Reports/Sale',['d' => $monday.' to '.$sunday]);
                }
            break;
            case 'orders':
                $subtype = $request->subtype;
                if($subtype == 'lists'){
                    $date = $request->date;
                    $d = (explode("to", $date));
                    $monday = str_replace(' ','',$d[0]);
                    $sunday = str_replace(' ','',$d[1]);
                    $monday =  date("Y-m-d", strtotime($monday));
                    $sunday = date("Y-m-d", strtotime($sunday));    

                    $orders = OrderList::with('product')->with('order.supplier.supplier')->whereBetween('created_at', [$monday, $sunday])->whereIn('status_id',[8,32])->get();
                    
                    $lists = [];
                    if(count($orders) > 0){
                        foreach($orders as $order){
                            $lists[] = [
                                'product' => $order['product']['name'],
                                'type' => 'Restock',
                                'quantity' => $order['quantity'],
                                'price'=> $order['price'],
                                'date' => $order['created_at'],
                                'supplier' => $order['order']['supplier']['supplier']['name'].' - '.$order['order']['supplier']['name'],
                            ];
                        }
                    }
                    return $lists;
                }else{
                    return inertia('Modules/Reports/Order',['d' => $monday.' to '.$sunday]);
                }
            break;
            case 'inventory':
                $subtype = $request->subtype;
                if($subtype == 'lists'){
                    $date = $request->date;
                    $d = (explode("to", $date));
                    $monday = str_replace(' ','',$d[0]);
                    $sunday = str_replace(' ','',$d[1]);
                    $monday =  date("Y-m-d", strtotime($monday));
                    $sunday = date("Y-m-d", strtotime($sunday));    

                    $sales = SaleList::with('product')->whereBetween('created_at', [$monday, $sunday])->where('status_id',27)->get();
                    $orders = OrderList::with('product')->whereBetween('created_at', [$monday, $sunday])->where('status_id',8)->get();
                    
                    $lists = [];
                    if(count($sales) > 0){
                        foreach($sales as $sale){
                            $lists[] = [
                                'product' => $sale['product']['name'],
                                'type' => 'Sold',
                                'quantity' => $sale['quantity'],
                                'price'=> $sale['price'],
                                'date' => $sale['created_at']
                            ];
                        }
                    }
                    if(count($orders) > 0){
                        foreach($orders as $order){
                            $lists[] = [
                                'product' => $order['product']['name'],
                                'type' => 'Restock',
                                'quantity' => $order['quantity'],
                                'price'=> $order['price'],
                                'date' => $order['created_at']
                            ];
                        }
                    }

                    return $lists;
                }else{
                    return inertia('Modules/Reports/Inventory',['d' => $monday.' to '.$sunday]);
                }
             break;
            default : 
            return inertia('Modules/Inventory/Packages/Index');
        }
    }


    public function edit($date,Request $request){
       
        $d = (explode("to", $date));
        $monday = str_replace(' ','',$d[0]);
        $sunday = str_replace(' ','',$d[1]);
        $monday =  date("Y-m-d", strtotime($monday));
        $sunday = date("Y-m-d", strtotime($sunday));        

        $sales = SaleList::with('product')->whereBetween('created_at', [$monday, $sunday])->where('status_id',27)->get();
        $orders = OrderList::with('product')->whereBetween('created_at', [$monday, $sunday])->where('status_id',8)->get();
        
        $sessions = [];
        if(count($sales) > 0){
            foreach($sales as $sale){
                $sessions[] = [
                    'product' => $sale['product']['name'],
                    'type' => 'Sold',
                    'quantity' => $sale['quantity'],
                    'price'=> $sale['price'],
                    'date' => $sale['created_at']
                ];
            }
        }
        if(count($orders) > 0){
            foreach($orders as $order){
                $sessions[] = [
                    'product' => $order['product']['name'],
                    'type' => 'Restock',
                    'quantity' => $order['quantity'],
                    'price'=> $order['price'],
                    'date' => $order['created_at']
                ];
            }
        }

        $monday2 =  date("F d, y", strtotime("this week monday"));
        $sunday2 = date("F d, y", strtotime("this week sunday"));      

        $array = [
            'sessions' => $sessions,
            'week' => $monday2.' to '.$sunday2
        ];

        $pdf = \PDF::loadView('print.report',$array)->setPaper('a4', 'landscape');
        return $pdf->download('InventoryReport.pdf');
    }


    public function sales($date,Request $request){
       
        $d = (explode("to", $date));
        $monday = str_replace(' ','',$d[0]);
        $sunday = str_replace(' ','',$d[1]);
        $monday =  date("Y-m-d", strtotime($monday));
        $sunday = date("Y-m-d", strtotime($sunday));        

        $sales = SaleList::with('product','sale.customer')->whereBetween('created_at', [$monday, $sunday])->where('status_id',27)->get();
        
        $sessions = [];
        if(count($sales) > 0){
            foreach($sales as $sale){
                $sessions[] = [
                    'customer'=> $sale['sale']['customer']['name'],
                    'product' => $sale['product']['name'],
                    'type' => 'Sold',
                    'quantity' => $sale['quantity'],
                    'price'=> $sale['price'],
                    'date' => $sale['created_at']
                ];
            }
        }

        $monday2 =  date("F d, y", strtotime("this week monday"));
        $sunday2 = date("F d, y", strtotime("this week sunday"));      

        $array = [
            'sessions' => $sessions,
            'week' => $monday2.' to '.$sunday2
        ];

        $pdf = \PDF::loadView('print.sale',$array)->setPaper('a4', 'landscape');
        return $pdf->download('SaleReport.pdf');
    }

    public function orders($date,Request $request){
       
        $d = (explode("to", $date));
        $monday = str_replace(' ','',$d[0]);
        $sunday = str_replace(' ','',$d[1]);
        $monday =  date("Y-m-d", strtotime($monday));
        $sunday = date("Y-m-d", strtotime($sunday));        

        $orders = OrderList::with('product','order.supplier.supplier')->whereBetween('created_at', [$monday, $sunday])->where('status_id',8)->get();
    
        if(count($orders) > 0){
            foreach($orders as $order){
                $sessions[] = [
                    'supplier' => $order['order']['supplier']['supplier']['name'].' - '.$order['order']['supplier']['name'],
                    'product' => $order['product']['name'],
                    'type' => 'Restock',
                    'quantity' => $order['quantity'],
                    'price'=> $order['price'],
                    'date' => $order['created_at']
                ];
            }
        }

        $monday2 =  date("F d, y", strtotime("this week monday"));
        $sunday2 = date("F d, y", strtotime("this week sunday"));      

        $array = [
            'sessions' => $sessions,
            'week' => $monday2.' to '.$sunday2
        ];

        $pdf = \PDF::loadView('print.order',$array)->setPaper('a4', 'landscape');
        return $pdf->download('OrderReport.pdf');
    }
}
