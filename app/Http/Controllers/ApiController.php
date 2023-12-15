<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleList;
use App\Models\Product;
use App\Models\Package;
use App\Models\Customer;
use App\Models\Discount;
use App\Models\Dropdown;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\DefaultResource;
use App\Http\Requests\StoreRequest;

class ApiController extends Controller
{
   
    public function lists(){
        $payments = Dropdown::where('classification','Payment')->get();
        $discounts = Discount::where('is_active',1)->get();
        $customers = Customer::all();

        $data = [
            'payments' => $payments,
            'discounts' => $discounts,
            'customers' => $customers
        ];

        return response()->json([
            'status' => true,
            'message' => 'Lists',
            'data' => $data
        ], 200);
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $data = Product::with('category','unit','pricing','discounts.discount.subtype')->where('code',$keyword)->first();
        if(isset($data)){
            if($data->stock <= 0){
                return 'No stocks available';
            }else{
                return new ProductResource($data);
            }
        }else{
            $data = Package::with('lists.product','category','discounts.discount.subtype')->where('code',$keyword)->first();
            if(isset($data)){
                return new PackageResource($data);
            }else{
                return [];
            }
        } 
    }

    public function store(StoreRequest $request){

        // return response()->json(['message' => 'User created successfully']);

        // $request->validate([
        //     'customer_id' => 'required',
        //     'discount_id' => 'required',
        //     'payment_id' => 'required',
        //     'lists' => 'required|array',
        //     'lists.*' => 'required|array'
        // ]);
        
        if($request->editable){
            $data = Sale::where('id',$request->id)->first();
            $data->update($request->except('editable'));
            return $data;
        }else{
            $total = 0;
            $code = 'SLS'.date('Y').date('m').date('d')."-".str_pad((Sale::count()+1), 4, '0', STR_PAD_LEFT);  
            $lists = $request->lists;
            $data = Sale::create(array_merge($request->all(),['code' => $code]));
            if($data){
                foreach($lists as $list){
                    $l = new SaleList;
                    $l->price = $list['price'];
                    $l->quantity = $list['quantity'];
                    $l->discount = $list['discounted'];
                    $l->total = $list['total'];
                    $l->status_id = 27;
                    $l->type = $list['type'];
                    if($list['type'] == 'Product'){
                        $l->product_id = $list['id'];
                    }else{
                        $l->package_id = $list['id'];
                    }
                    $l->sale_id = $data->id;
                    if($l->save()){
                        $id = $list['id'];
                        $quantityToSubtract = $list['quantity'];
                        if($list['type'] == 'Product'){
                            $product = Product::where('id',$id)->decrement('stock', $quantityToSubtract);
                        }else{
                            $product = Package::where('id',$id)->decrement('stock', $quantityToSubtract);
                        }
                    }
                }
                return response()->json(['message' => 'Success']);
            }else{
                return response()->json(['message' => 'Failed']);
            }
        }
    }
}
