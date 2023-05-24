<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('frontend.homePage');
    }


    public function shop(){
        return  view('frontend.shopPage');;
    }


    public function category($categoryName){
        return  view('frontend.shopPage');;
    }


    public function shopDetails($id){
        return  view('frontend.shopDetails');;
    }


    public function cart(){
        return  view('frontend.shoppingCart');;
    }

    public function checkout(){
        return  view('frontend.checkout');;
    }

    public function unfound404(){
        return  '404';
    }
}
