<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function product1() {
        $product = Product::where('name', 'Product 1')->first();
        return view('detail-product', compact('product'));
    }

    public function product2()
    {
        $product = Product::where('name', 'Product 2')->first();
        return view('detail-product', compact('product'));
    }

    public function product3()
    {
        $product = Product::where('name', 'Product 3')->first();
        return view('detail-product', compact('product'));
    }
    public function product4()
    {
        $product = Product::where('name', 'Product 4')->first();
        return view('detail-product', compact('product'));
    }
}
