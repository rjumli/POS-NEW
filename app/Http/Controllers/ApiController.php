<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\DefaultResource;

class ApiController extends Controller
{
    public function search(Request $request){
        $keyword = $request->keyword;
        $data = Product::with('category','unit','pricing','discounts.discount.subtype')->where('code',$keyword)->first();
        if(isset($data)){
            return new ProductResource($data);
        }else{
            $data = Package::with('lists.product','category','discounts.discount.subtype')->where('code',$keyword)->first();
            if(isset($data)){
                return new PackageResource($data);
            }else{
                return [];
            }
        } 
    }
}
