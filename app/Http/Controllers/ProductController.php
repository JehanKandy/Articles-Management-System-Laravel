<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|min:3|max:255',
            'product_description' => 'required|min:3|max:255',
            'qty' => 'required',
            'product_price' => 'required',
            'product_status' => 'required',
            
        ]);

        Product::create($request->all());
        return redirect('product')->with('flash_message', 'Product Addedd Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $product = Product::find($id);

        // $request->validate([
        //     'product_name' => 'required|min:3|max:255',
        //     'product_description' => 'required|min:3|max:255',
        //     'qty' => 'required',
        //     'product_price' => 'required',
           
        // ]);

        // Product::where('id', $id)->update($request);
        // return redirect('product')->with('flash_message', 'Product Updated Successfully!');

        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted Successfully!'); 
    }
}
