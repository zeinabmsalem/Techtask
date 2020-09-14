<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Request;

use App\Category;

use App\Product;

use App\Cart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        return response()->json('return success');
    }


    public function search()
    {
        
        $search = Request::get('search');


        $products = Product::where('name', 'like', '%'. $search. '%')
                            ->orWhere('code', 'like', '%'. $search. '%')
                            ->orWhere('orginal_price', 'like', '%'. $search. '%')
                            ->orWhere('sale_price', 'like', '%'. $search. '%')
                            ->orWhere('brand_name', 'like', '%'. $search. '%')
                            ->orWhere('color', 'like', '%'. $search. '%')
                            ->orWhere('category_name', 'like', '%'. $search. '%')
                            ->get();

        return view('products.view_product', compact('products'));

    }

        public function add_to_cart($id)
    {

        $product = Product::find($id);

        $cart = new Cart;

        $user_id = auth()->user()->id;

        $cart->user_id = $user_id;

        $cart->name = $product->name;
        $cart->code = $product->code;
        $cart->orginal_price = $product->orginal_price;
        $cart->sale_price = $product->sale_price;
       
        $cart->brand_name = $product->brand_name;
        $cart->color = $product->color;
        $cart->description = $product->description;

        $cart->category_name = $product->category_name;

        $cart->save();

        // $carts = Cart::all();

        return redirect('/home');
    }

    public function show_cart()
    {

        $carts = Cart::whereNull('flag')->get();

        $totalarr = [];

        foreach ($carts as $cart) {

            array_push($totalarr, $cart->orginal_price);           
        } 

        $total = array_sum($totalarr);


        return view('products.cart', compact('carts', 'total'));       

    }

    public function delete_cart_item($id)
    {

        $cart = Cart::find($id);

        $cart->delete();

        // Session::flash('message', 'Category with ID = '. $category->id. " Deleted Successfully");

        return redirect('/show_cart');
    }


}
