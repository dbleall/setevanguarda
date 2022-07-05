<?php

namespace App\Http\Controllers;

use App\Models\Product;    
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        $products = Product::latest()->paginate(5);      
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view('products.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
        $request->validate([
            'product_name' => 'required'
        ]);

        $product = new product;
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->product_image1 = $request->product_image1;
        $product->product_image2 = $request->product_image2;
        $product->product_image3 = $request->product_image3;
        $product->product_image4 = $request->product_image4;
        $product->product_image5 = $request->product_image5;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_condition_payment = $request->product_condition_payment;
        $product->product_description = $request->product_description;
        $product->product_description2 = $request->product_description2;
        $product->product_suplier = $request->product_suplier;
        $product->save();
        
        return redirect()->route('products.index')->with('success','Produto incluido com sucesso');

    }
    /**
    * Display the specified resource.
    *
    * @param  \App\product  $product
    * @return \Illuminate\Http\Response
    */
    public function show(product $product)
    {
    return view('products.show',compact('product'));
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\product  $product
    * @return \Illuminate\Http\Response
    */
    public function edit(product $product)
    {
    return view('products.edit',compact('product'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\product  $product
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'product_name' => 'required',
    ]);
    $product = product::find($id);
    $product->product_name = $request->product_name;
    $product->product_category = $request->product_category;
    $product->product_image1 = $request->product_image1;
    $product->product_image2 = $request->product_image2;
    $product->product_image3 = $request->product_image3;
    $product->product_image4 = $request->product_image4;
    $product->product_image5 = $request->product_image5;
    $product->product_code = $request->product_code;
    $product->product_price = $request->product_price;
    $product->product_condition_payment = $request->product_condition_payment;
    $product->product_description = $request->product_description;
    $product->product_description2 = $request->product_description2;
    $product->product_suplier = $request->product_suplier;
    $product->save();
    return redirect()->route('products.index')
    ->with('success','Produto alterado com sucesso');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\product  $product
    * @return \Illuminate\Http\Response
    */
    public function destroy(product $product)
    {
    $product->delete();
    return redirect()->route('products.index')
    ->with('success','Produto excluido com sucesso');
    }
}
