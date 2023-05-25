<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\categoriers;
use App\Models\product;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $newProducts = product::orderBy("id", "desc")->limit(12)->get();
        return view('frontend.homePage', compact("newProducts"));
    }


    public function shop()
    {
        $products = product::paginate(12);
        $productsAll = product::all();
        $categoriers = categoriers::all();
        return  view('frontend.shopPage', compact("products", "productsAll", "categoriers"));
    }


    public function category($categoryName)
    {
        return  view('frontend.shopPage');
    }


    public function shopDetails($id)
    {

        $product = product::find($id);
        $RelatedProducts = product::all()->where("category_id", "==", $product->category_id);
        $product_images = $product->product_images;
        $product_categorie = $product->categorie->name;
        $product_sizes = $product->product_sizes;
        $product_colors=$product->product_colors;
        return  view('frontend.shopDetails', compact("product", "RelatedProducts", "product_images", "product_categorie", "product_sizes","product_colors"));
    }


    public function cart()
    {
        return  view('frontend.shoppingCart');;
    }

    public function checkout()
    {
        return  view('frontend.checkout');;
    }

    public function unfound404()
    {
        return  '404';
    }
}
