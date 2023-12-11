<?php

namespace App\Http\Controllers;

use App\Models\SaleList;
use App\Models\SaleListReturn;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class SupplierReturnController extends Controller
{
    public function index(Request $request){
        $options = $request->options;
        switch($options){
            case 'lists':
               return $this->lists($request);
            break;
            default : 
            return inertia('Modules/Inventory/Supplier/Index');
        }
    }

    public function store(Request $request){

        $request->validate([
            'description' => 'sometimes|required',
            'title' => 'sometimes|required',
        ]);

        $data = \DB::transaction(function () use ($request){
            if($request->editable == 'true'){
                $data = SaleListReturn::where('id',$request->id)->first();
                $data->update($request->except('editable'));
                return $data;
            }else{
                return $data = SaleListReturn::create(array_merge($request->all(),['added_by' => \Auth::user()->id]));
            }
            
        });
        $message = ($request->editable) ? 'updated' : 'created';
        return back()->with([
            'message' => 'Terms and Condition '.$message.' successfully. Thanks',
            'data' => new DefaultResource($data),
            'type' => 'bxs-check-circle',
            'color' => 'success'
        ]); 
    }

    public function update(Request $request){
        $request->validate([
            'reason_id' => 'sometimes|required',
            'reason' => 'sometimes|required',
        ]);

        $data = SaleListReturn::where('id',$request->id)->first();
        $data->reason_id = $request->reason_id;
        $data->save();

        return back()->with([
            'message' => 'Refunded successfully. Thanks',
            'data' => new DefaultResource($data),
            'type' => 'bxs-check-circle',
            'color' => 'success'
        ]); 
    }

    public function lists($request){
        $data = DefaultResource::collection(
            SaleList::with('product','sale.customer','status','return.status')
            ->where('status_id',28)
            ->whereHas('return',function ($query) {
                $query->where('reason_id','!=',36);
            })
            ->orderBy('id','desc')
            ->paginate(10)
            ->withQueryString()
        );
        return $data;
    }
}
