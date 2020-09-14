<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use App\Product;

use App\Category;

use App\Cart;

// use Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        // $cat_id = $products->category_id;

        // $category = Category::find($cat_id);

        return view('products.view_product', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.add_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product;

        $product->name = $request->input('name');
        $product->code = $request->input('code');
        $product->orginal_price = $request->input('orginal_price');
        $product->sale_price = $request->input('sale_price');
       
        $product->brand_name = $request->input('brand_name');
        $product->color = $request->input('color');
        $product->description = $request->input('description');


        // if ($request->has('image')) {

        //     $image = $request->file('image');
        //     $input['image'] = $image->getClientOriginalName();

        //     $destinationPath = url('/'). '/uploads/'. $image->getClientOriginalName();

        //     $result = $image->move($input['image'], $destinationPath);

        //     $product->image_name = $result;

        // }


        $id = $request->input('category');
        $category = Category::find($id);

        $product->category_name = $category->category_name;
        $product->category_id = $request->input('category');        

        $product->save();           

        return redirect('/product')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show_product', compact('product'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();

        return view('products.edit_product', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product = Product::find($id);

        $product->name = $request->name;
        $product->code = $request->code;
        $product->orginal_price = $request->orginal_price;

        $product->sale_price = $request->sale_price;
        $product->brand_name = $request->brand_name;

        $product->color = $request->color;
        $product->description = $request->description;
        $product->category_name = $request->image;
        $product->category_name = $request->category;


        $product->update();

        return redirect('/product');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::find($id);

        $product->delete();

        // Session::flash('message', 'Category with ID = '. $category->id. " Deleted Successfully");

        return redirect('/product');    
    }

    public function price_high_low_product()
    {

        $products = Product::all()->sortByDesc('orginal_price');

        return view('products.high_low_product', compact('products'));

    }


    public function price_low_high_product()
    {

        $products = Product::all()->sortBy('orginal_price');

        return view('products.high_low_product', compact('products')); 
    }


    public function filter_category($name)
    {

        $products = Product::Where('category_name', '=' , $name)->get();

        return view('products.filter_category', compact('products')); 
    }



    public function filter_price($name)
    {

        $products = Product::Where('sale_price', '=' , $name)->get();

        return view('products.filter_price', compact('products')); 
    }


    public function filter_color($name)
    {

        $products = Product::Where('color', '=' , $name)->get();

        return view('products.filter_color', compact('products')); 
    }
}
