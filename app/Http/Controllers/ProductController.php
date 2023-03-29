<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function product1() {
        return view('detail-product', ['category' => 'produk1']);
    }

    public function product2()
    {
        return view('detail-product', ['category' => 'produk2']);
    }

    public function product3()
    {
        return view('detail-product', ['category' => 'produk3']);
    }
}
