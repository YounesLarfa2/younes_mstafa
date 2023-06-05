<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function add_to_cart($Product_id,Request $request)

    {
        $product = Product::find($Product_id);
        $product_color_size_id = ProductColorSize::where('product_color_id',$request->input('color'))->where('product_size_id',$request->input('size'))->first();

        $user_id = Auth::id();
        if($user_id){
            $product_color_size_id_existed = Cart::where('product_color_size_id',$product_color_size_id->id)->where('user_id',$user_id)->first();

            if($product_color_size_id_existed){
                
                $product_color_size_id_existed['quantity'] =$product_color_size_id_existed['quantity'] +1 ;
                $product_color_size_id_existed->save();
                $number_quantity = Cart::where('user_id',$user_id)->get();
                $count = 0;

                foreach($number_quantity as $one){
                            $count = $count + $one['quantity'];
                }
        
                return response()->json(['count'=>$count]);
            }else{

                $cart = new Cart();
                $cart->user_id =$user_id;
                $cart->image = $product->image;
                $cart->product_color_size_id =$product_color_size_id->id;
                $cart->quantity = 1;
                $cart->total =$product->price;
                $cart->save();
                $cart = session()->get('cart',[]);
                $count =  session()->get('count',1);
                $user_id = Auth::id();
                $number_quantity = Cart::where('user_id',$user_id)->get();
                $count = 0;
                foreach($number_quantity as $one){
                            $count = $count + $one['quantity'];
                }
                return response()->json(['count'=>$count]);
            }
        
        }else{
            $cart = session()->get('cart',[]);
            $count =  session()->get('count',0);
            if(isset($cart[$product_color_size_id->id])){
                $cart[$product_color_size_id->id]['quantity'] = $cart[$product_color_size_id->id]['quantity']+ 1;
            }else{
                $cart[$product_color_size_id->id] = [
                    'name' => $product->name,
                    'image' => $product->image ,
                    'quantity' => 1 ,
                    'total' => $product->price, 
                    'color' => $product_color_size_id->product_color->color,
                    'size' => $product_color_size_id->product_size->size
                ];
            }
            session()->put('cart',$cart);
            $count_reset = 0;
                foreach($cart as $one){
                            $count_reset = $count_reset + $one['quantity'];
                }
    
            session()->put('count',$count_reset);

            return response()->json(['count'=>$count_reset]);

        }
        die;

    }

    public function show_cart()
    {
        $carts = Cart::all();
        return view('show_cart', [
            'carts' => $carts,
        ]);
    }

    public function update_cart(Request $req)
    {  
        $user_id = Auth::id();
        if(isset($user_id)){
            $product_color_size_id_existed = Cart::where('id',$req->id)->first();
            $product_color_size_id_existed['quantity'] = $req->qte;
            $product_color_size_id_existed->save();
            return redirect()->back();
        }else{
            $cart = session()->get('cart');
            $count = session()->get('count');
            $OLD = $count - $cart[$req->id]['quantity'];
            $add_new = $OLD + $req->qte;
            $cart[$req->id]['quantity'] = $req->qte;
            session()->put('cart',$cart);
            $count =  session()->put('count',$add_new);
            return redirect()->back();

        }

    }

    public function delete_cart($id)
    {
        $user_id = Auth::id();
        if(isset($user_id)){

        $cart = Cart::find($id)->delete();
        return Redirect()->back();
        }
        else{
            $cart = session()->get('cart');
            $count =  session()->get('count',0);
            $count = $count - $cart[$id]['quantity'];
            unset($cart[$id]);
        
            session()->put('cart',$cart);
            session()->put('count',$count);
            // session()->flush();

            return Redirect()->back();



        }
    }
}
