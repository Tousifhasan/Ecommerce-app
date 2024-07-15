<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }   
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validate input (add appropriate validation rules)
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            // Add other validation rules as needed
        ]);

        // Update product fields
        $product->update($request->all());

    // Redirect back to the product details page
        return redirect()->route('products.show', $product->id);
    }
    public function edit($id)
{
    $product = Product::findOrFail($id); // Find product by ID
    return view('products.edit', compact('product'));
}

}
