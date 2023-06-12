<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
        dd($all);
    }
}
