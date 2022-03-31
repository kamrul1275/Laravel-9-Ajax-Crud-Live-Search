<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Products()
    {
       return view('product');
    }




    public function addProducts(Request $request)
{
    $request->validate([
        'name' => 'required',
        'product' => 'required',
    ],


    [
        'name.required'=>'name is required',

        'product.required'=>'product is required',

            ],
);

$product = new Product();
$product->name = $request->name;

$product->product = $request->product;
$product->save();

return response()->json([

'status'=>'success',

]);

}
}
