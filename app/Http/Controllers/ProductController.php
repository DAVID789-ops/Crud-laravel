<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

   
    public function create()
    {
        return view('products.create');

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;  
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');

    }

    
    public function show(Product $product)  

    {
        return view('products.show', compact('product'));
    }

    
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;  
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    
    public function destroy(Product $product)   
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
