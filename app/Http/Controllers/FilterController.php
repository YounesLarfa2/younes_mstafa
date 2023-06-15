<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_color;
use App\Models\product_size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class FilterController extends Controller
{
    public function filter(Request $Request)
    {
        $productColor = DB::table('products')
            ->join('product_colors', 'products.id', '=', 'product_colors.product_Id')
            ->select('products.*')
            ->where("product_colors.color", "=", $Request->color)
            ->get();


        $productSize = DB::table('products')
            ->join('product_sizes', 'products.id', '=', 'product_sizes.product_Id')
            ->select('products.*')
            ->where("product_sizes.size", "=", $Request->size)
            ->get();

        $productCategories = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->select('products.*')
            ->where("products.category_id", "=", $Request->categorier)
            ->get();

        $all = $productColor->merge($productSize)->merge($productCategories)->unique();

        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id', $user_id)->get();

        $count = 0;
        foreach ($number_quantity as $one) {
            $count = $count + $one['quantity'];
        }
        if (count($all) == 0) {
            $products = Product::all();
        } else {
            $products = $all;
        }
        $productsAll = product::all();
        $categoriers = Category::all();
        $product_colors = product_color::all()->groupBy("color");
        $product_sizes = product_size::all()->groupBy("size");
        return  view('frontend.shopPage', compact("products", "productsAll", "categoriers", "count", "product_colors", "product_sizes"));
    }

    public function filter_category(Request $Request, $category_id)
    {
        $categorie = Category::find($category_id);
        $productColor = DB::table('products')
            ->join('product_colors', 'products.id', '=', 'product_colors.product_Id')
            ->select('products.*')
            ->where("product_colors.color", "=", $Request->color)
            ->where("products.category_id", "=", $category_id)
            ->get();


        $productSize = DB::table('products')
            ->join('product_sizes', 'products.id', '=', 'product_sizes.product_Id')
            ->select('products.*')
            ->where("product_sizes.size", "=", $Request->size)
            ->where("products.category_id", "=", $category_id)
            ->get();

        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id', $user_id)->get();

        $count = 0;
        foreach ($number_quantity as $one) {
            $count = $count + $one['quantity'];
        }
        $categoriers = Category::all();
        $products = $productColor->merge($productSize)->unique();
        $product_colors = product_color::all()->groupBy("color");
        $product_sizes = product_size::all()->groupBy("size");
        return  view('frontend.categorie', compact("categoriers", "categorie", "products", "count", "product_colors", "product_sizes"));
    }
}
