<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::first();
        
        $collapsed = 'display-orders';
        $orders = Order::paginate(10);  
        return view('admin2.orders.index',compact('orders','collapsed'));
    
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        $order_details = $order->order_details;
        $collapsed = 'display-orders';

        return view('admin2.orders.show',compact('order','order_details','collapsed'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::find($id)->delete();
        return redirect()->back();
    }
}
