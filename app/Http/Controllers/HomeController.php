<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product_types = ProductType::all();
        $products = Product::query()->get();
        return view('home', compact('product_types', 'products'));
    }
}
