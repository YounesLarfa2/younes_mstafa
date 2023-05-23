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
        return 'ok';
    }


    public function category($categoryName){
        return 'ok';
    }


    public function shopDetails($id){
        return 'ok';
    }


    public function cart(){
        return 'ok';
    }

    public function checkout(){
        return 'ok';
    }

    public function unfound404(){
        return 404;
    }
}
