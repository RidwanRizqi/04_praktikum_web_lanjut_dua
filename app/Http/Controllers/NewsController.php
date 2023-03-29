<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('detail-news', compact('news'));
    }
}
