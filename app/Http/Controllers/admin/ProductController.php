<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');

    }


    public function store(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'category_name' =>'required'
            ]);
        
         if($req->file()) {
            $fileName = time().'_'.$req->file('image')->getClientOriginalName();
            $filePath = $req->file('image')->move(public_path('uploads/'),$fileName);
            $product = new Product();
            $product->name = $req->name;
            $product->price = $req->price;
            $product->discount_price = $req->discount_price;
            $product->description = $req->description;
            $product->category_id = 1;
            $product->image = $fileName;
            $product->save();
            return to_route('admin.products.index');
        };
        

    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('admin.products.edit');

    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
