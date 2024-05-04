<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class TentangKamiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $users = User::all();
        return view('user.tentangkami', compact('products'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        
        return view('user.tentangkami', compact('product'), ['type_menu' => 'product']);
    }
}