<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function product(){

        $products = Product::latest()->paginate(5); 

        return view('product',compact('products'));

    }

    public function addproduct(Request $request){

        $request->validate(
            [

                'name'=>'required|unique:products',
                'price'=>'required',

            ],
            [

                'name.required'=>'Name can not be empty',
                'name.unique'=>'This field is exists',
                'price.required'=>'Price can not be empty',

            ]
    );

        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;

        $product->save();

        return response()->json([
            'status'=>'success',
        ]);


    }
}
