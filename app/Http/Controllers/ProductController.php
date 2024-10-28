<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the data
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required'
        ]);


        Product::create($request->all());

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         // validate the data
         $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required'
        ]);

        $product->update($request->all());
        return redirect('/products');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}