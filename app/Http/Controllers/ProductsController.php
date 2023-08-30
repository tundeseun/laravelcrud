<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function adding(Request $request)
    {
        $items=new Products();
        $items->name = $request->name;
        $items->amount = $request->amount;
        $items->save();
        return response()->json('Product Successful Added');
    }

    public function edit(Request $request)
    {
        $items=Products::findorfail($request->id);
        $items->name = $request->name;
        $items->amount = $request->amount;
        $items->update();
        return response()->json('Product Successful Updated');
    }

    public function delete(Request $request)
    {
        $items=Products::findorfail($request->id)->delete() ;
       
        return response()->json('Product Successful Deleted');
    }
}
