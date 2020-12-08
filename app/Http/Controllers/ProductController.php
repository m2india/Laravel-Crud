<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all()->toArray();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric'
        ]);
        
        Product::create($product);
        return back()->with('success', 'Product has been added');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product','id'));
    }

     public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric'
        ]);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products')->with('success','Product has been updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }

}