<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;

use App\Models\categoriers;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\product;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $count = 0;
        $cart = session()->get('cart',[]);

        if($user_id){
            if(session('cart')){
                foreach($cart as $row){
                    $cart = new Cart();
                    $cart->user_id = $user_id;
                    $cart->image = $row['image'];
                    $cart->product_color_size_id  = array_search($row, session('cart'));
                    $cart->quantity = $row['quantity'];
                    $cart->total = $row['total'];
                    $cart->save();
                }
                session()->forget('cart');
            }
            $number_quantity = Cart::where('user_id',$user_id)->get();
            foreach($number_quantity as $one){
                        $count = $count + $one['quantity'];
            }

        
        }else{
            $count =  session()->get('count',0);
            $count_reset = 0;
                foreach($cart as $one){
                            $count_reset = $count_reset + $one['quantity'];
                }
    
            session()->put('count',$count_reset);

        } 
        $newProducts = product::orderBy("id", "desc")->limit(12)->get();
        $categoriers = Category::all();
        return view('frontend.homePage', compact("newProducts", "categoriers" ,"count"))->with('success','suuu');

    }

    public function filter_by_color($prod_id , $color_id)
    {
            $product = product::find($prod_id);
            if($product){
                $product_color_sizes = $product->product_colors_sizes()->where('product_color_id',$color_id)->get();
                $sizes = [];
                $number = 0;

                foreach($product_color_sizes as $product_size){
                    $number = $number + $product_size->quantity;
                    array_push($sizes,$product_size->product_size);

                }
                return response()->json(['sizes' => $sizes ,'availability' => $number]);
            }
    }
    public function filter_by_size($prod_id , $size_id , $color_id)
    {
            $product = product::find($prod_id);
            if($product){
                $product_color_sizes = $product->product_colors_sizes()->where('product_size_id',$size_id)->where('product_color_id',$color_id)->get();
                $number = 0;

                foreach($product_color_sizes as $product_size){
                    $number = $number + $product_size->quantity;
                }
                return response()->json(['availability' => $number]);
            }
    }

    public function all_sizes($prod_id )
    {
            $product = product::find($prod_id);
            if($product){
                $product_sizes = $product->product_sizes()->get();
                $sizes = [];
                foreach($product_sizes as $product_size){
                    array_push($sizes,$product_size->size);
                }
                $number = 0;
                $availables = $product->product_colors_sizes;
                foreach($availables as $available){
                    $number = $number + $available->quantity;
                };
                return response()->json(['sizes' => $sizes ,'availability' => $number]);
            }
    }
    public function shop()
    {
        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id',$user_id)->get();

        $count = 0;
        foreach($number_quantity as $one){
                    $count = $count + $one['quantity'];
        }
        $products = product::paginate(2);
        $productsAll = product::all();
        $categoriers = Category::all();
        return  view('frontend.shopPage', compact("products", "productsAll", "categoriers" ,"count"));
    }


    public function category(Category $categorie)

    {
        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id',$user_id)->get();

        $count = 0;
        foreach($number_quantity as $one){
                    $count = $count + $one['quantity'];
        }
        $categorie_name=$categorie->name;
        $categoriers = Category::all();
        $Allproducts=$categorie->products;
        $products=$categorie->products()->paginate(8);
        return  view('frontend.categorie', compact("categoriers","categorie_name","products","count"));
    }


    public function shopDetails($id)
    {
        $product = product::find($id);
        $RelatedProducts = product::all()->where("category_id", "==", $product->category_id);
        $product_categorie = $product->category->name;
        $product_sizes = $product->product_sizes;
        $product_colors = $product->product_colors;
        $categoriers = Category::all();
        $availables = $product->product_colors_sizes;
        $number = 0;
        foreach($availables as $available){
            $number = $number + $available->quantity;
        };
        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id',$user_id)->get();

        $count = 0;
        foreach($number_quantity as $one){
                    $count = $count + $one['quantity'];
        }

        return  view('frontend.shopDetails', compact("product", "RelatedProducts","count","product_categorie", "product_sizes", "product_colors", "categoriers" ,"number"));
    }


    public function cart()
    {
        $categoriers = Category::all();
        $user_id = Auth::id();
        $carts = Cart::where('user_id',$user_id)->get();
        $count = 0;
        $number_quantity = Cart::where('user_id',$user_id)->get();
        foreach($number_quantity as $one){

                    $count = $count + $one['quantity'];
        }
        $total =0;
        foreach($number_quantity as $one){

                    $total = ( $total + $one['total'] )* $one['quantity'];
        }
        // dd($total);
        return  view('frontend.shoppingCart', compact("categoriers","carts","count","total"));;
    }

    public function checkout()
    {
        $user_id = Auth::id();
        if(isset($user_id)){
            $number_quantity = Cart::where('user_id',$user_id)->get();
            $user_has_order = Order::where('users_id',$user_id)->get()->reverse()->first();
            $count = 0;
            foreach($number_quantity as $one){
                        $count = $count + $one['quantity'];
            }
            $categoriers = Category::all();
            $total =0;
            foreach($number_quantity as $one){
    
                        $total = ( $total + $one['total'] )* $one['quantity'];
            }
            return  view('frontend.checkout', compact("categoriers","count","user_has_order","number_quantity","total"));
        }else{
            return redirect()->back()->with('alert','you must log in to continue the Process ! Thank you');
        }

    }

    public function checkout_store(Request $req)
    {
        $order = new Order();
        $order->status = 'pending';
        $order->users_id = Auth::id();
        $order->total_price = $req->total;
        $order->address = $req->address;
        $order->city = $req->city;
        $order->full_name = $req->name;
        $order->phone = $req->phone;
        $order->save();
        $user_id = Auth::id();
        $number_quantity = Cart::where('user_id',$user_id)->get();
        foreach($number_quantity as $one){
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_colors_size_id = $one->product_color_size_id;
            $order_detail->quantity = $one->quantity;
            $order_detail->price = $one->total;
            $order_detail->save();
        }
        Cart::where('user_id',$user_id)->delete();
        return to_route('success_checkout')->with('success','you have the right');

    }
     public function success_checkout()
    {
        $categoriers = Category::all();
        $user_id = Auth::id();
        $carts = Cart::where('user_id',$user_id)->get();
        $count = 0;
        $number_quantity = Cart::where('user_id',$user_id)->get();
        foreach($number_quantity as $one){

                    $count = $count + $one['quantity'];
        }       
        $newProducts = product::orderBy("id", "desc")->limit(12)->get();

        return view('frontend.homePage' ,compact('newProducts','categoriers','count','carts'));
    }
}
