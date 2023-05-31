<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\categoriers;
use App\Models\Category;
use App\Models\product;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $newProducts = product::orderBy("id", "desc")->limit(12)->get();
        $categoriers = Category::all();
        return view('frontend.homePage', compact("newProducts", "categoriers"));
    }


    public function shop()
    {
        $products = product::paginate(12);
        $productsAll = product::all();
        $categoriers = Category::all();
        return  view('frontend.shopPage', compact("products", "productsAll", "categoriers"));
    }


    public function category(Category $categorie)

    {
        $categorie_name=$categorie->name;
        $categoriers = categoriers::all();
        $Allproducts=$categorie->products;
        $products=$categorie->products()->paginate(12);
        return  view('frontend.categorie', compact("categoriers","categorie_name","products"));
    }


    public function shopDetails($id)
    {
        $product = product::find($id);
        $RelatedProducts = product::all()->where("category_id", "==", $product->category_id);
        $product_images = $product->product_images;
        $product_categorie = $product->category->name;
        $product_sizes = $product->product_sizes;
        $product_colors = $product->product_colors;
        $categoriers = Category::all();
        return  view('frontend.shopDetails', compact("product", "RelatedProducts", "product_images", "product_categorie", "product_sizes", "product_colors", "categoriers"));
    }


    public function cart()
    {
        $categoriers = Category::all();
        return  view('frontend.shoppingCart', compact("categoriers"));;
    }

    public function checkout()
    {
        $categoriers = Category::all();
        return  view('frontend.checkout', compact("categoriers"));;
    }

    public function unfound404()
    {
        return  '404';
    }
}
