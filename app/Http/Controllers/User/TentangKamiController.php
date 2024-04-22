<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class TentangKamiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.tentangkami', compact('products'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('user.tentangkami', compact('product'), ['type_menu' => 'product']);
    }
}