<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Replicate;

use App\Cart;

use App\Order;

class OrderController extends Controller
{
    
    public function checkout()
    {
        $user_id = auth()->user()->id;

    	$carts = Cart::where('user_id', $user_id)
                     ->whereNull('order_id')->get();

    	$totalarr = [];

        foreach ($carts as $cart) {

            array_push($totalarr, $cart->orginal_price);           
        } 

        $total = array_sum($totalarr);

        return view('orders.checkout', compact('carts', 'total'));
    }


    public function store(Request $request)
    {
    	
        $order = new Order;

        $cart = new Cart();        

        $user_id = auth()->user()->id;

        $carts = Cart::where('user_id', $user_id)
                     ->whereNull('order_id')->get();


        $order->user_id = $user_id;
        $order->email = $request->input('email');
        $order->customer_name = $request->input('customer_name');

        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
    
        $order->card_name = $request->input('card_name');
        $order->card_date = $request->input('card_date');

        $order->save(); 

        $order_id = $order->id;

        foreach ($carts as $cart) {
            
            $cart->order_id = $order_id;

            $cart->flag = 1;

            $cart->save();
        }


        // Cart::truncate();

        return redirect('/home')->with('success', 'Order Saved Successfully');;

    }

    public function show_orders()
    {

        $user_id = auth()->user()->id;

        $orders = Order::where('user_id', $user_id)->get();


        return view('orders.show_orders', compact('orders'));
    }



    public function order_details($id)
    {

        $user_id = auth()->user()->id;

        $carts = Cart::where('order_id', $id)
                       ->Where('user_id', $user_id)
                       ->Where('flag', '=' , 1)->get();

        $totalarr = [];

        foreach ($carts as $cart) {

            array_push($totalarr, $cart->orginal_price);  
        } 

        $total = array_sum($totalarr);

        return view('orders.order_detail', compact('carts', 'total'));

    }
}
