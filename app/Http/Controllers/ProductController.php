<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Rules\UniqueNameBrandCombination;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\ItemResource;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(Request $request){
        $options = $request->options;
        switch($options){
            case 'lists':
               return $this->lists($request->all());
            break;
            default : 
            return inertia('Modules/Inventory/Products/Index');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('products')->where(function ($query) use ($request) {
                    return $query->where('brand', $request->brand);
                }),
            ],
            'brand' => 'required',
        ]);

        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = Product::where('id',$request->id)->first();
                $data->update($request->except('editable'));
                return $data;
            }else{
                $code = 'PRDCT'.date('Y').date('m').date('d')."-".str_pad((Product::count()+1), 4, '0', STR_PAD_LEFT);  
                return $data = Product::create(array_merge($request->all(),['code' => $code]));
            }
            
        });
    }

    public function lists($request){
        $category = $request['category'];
        $keyword = $request['keyword'];
        $is_available = $request['is_available'];

        $data = ItemResource::collection(
            Product::when($keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })
            ->when($is_available, function ($query, $is_available) {
                $query->where('is_active', $is_available);
            })
            ->whereHas('category',function ($query) use ($category) {
                $query->when($category, function ($query, $category) {
                    $query->where('id',$category);
                });
            })
            ->with('category','orders.status','sales','discounts')
            ->orderBy('id','asc')
            ->paginate(10)
            ->withQueryString()
        );
        return $data;
    }

    public function update(Request $request){
        $data = Product::where('id',$request->id)->update($request->except('id','type'));
        $data = Product::where('id',$request->id)->first();
        return back()->with([
            'message' => 'Product status updated successfully. Thanks',
            'data' => new ItemResource($data),
            'type' => 'bxs-check-circle',
            'color' => 'success'
        ]); 
    }
}
