<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product_types = ProductType::all();
        return view('home', compact('product_types'));
    }
}
