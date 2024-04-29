<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class BerandaController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', compact('products'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('user.index', compact('product'), ['type_menu' => 'product']);
    }
}
