<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PaketMakananController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.paketmakanan', compact('products'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('user.paketmakanan', compact('product'), ['type_menu' => 'product']);
    }
}
