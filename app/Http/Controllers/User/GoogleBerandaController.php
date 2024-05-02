<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\GoogleUser;

class GoogleBerandaController extends Controller
{
    public function index(Request $request)
    {
        // Periksa apakah pengguna login menggunakan Google
        if ($request->user() instanceof GoogleUser) {
            // Jika pengguna login menggunakan Google, tampilkan semua produk
            $products = Product::all();
            return view('user.index', compact('products'), ['type_menu' => 'catalog']);
        } else {
            // Jika pengguna login menggunakan cara lain, tampilkan halaman beranda biasa
            return view('user.index', ['type_menu' => 'home']);
        }
    }
}
