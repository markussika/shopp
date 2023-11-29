<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view("products.index", ["products" => $products]);
    }

    public function create()
    {
        return view("products.create");
    }
    public function store(Request $request, Product $product)
    {
        // dd($request);

        $product->name = $request->ProductName;
        $product->imageURL = $request->imageURL;
        $product->description = $request->Deskription;
        $product->price = $request->Price;
        $image = $request->file('Imgurl');
        $fileName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $fileName);
        $product->imageURL = '/images/' . $fileName;
        $request->validate(
            [
                "ProductName" => ["required", "min:3", "max:30"],
                // "imageURL" => ["required", "image", "max:10240"],
                "Deskription" => ["required", "min:3", "max:30"],
                "Price" => ["required", "numeric"]
            ]
            );
        $product->save();

        return redirect("/products");
        // dd($request->ProductTitle);
        // dd($request->Imgurl);
        // dd($request->Deskription);
        // dd($request->Price);
    }

    public function show(Request $request, $id)
    {
        $products = Product::find($id);
        if($products)
        {
            return view("products.show", ["products" => $products]);
        }
        return redirect("/products");


    }
    public function edit(Request $request, $id){
        $product = Product::find($id);
        
        if($product)
        {
            return view("products.edit", ["products"=>$product]);
        }
        return redirect("/products");
    }
}