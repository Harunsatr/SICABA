<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PaketMakananUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.paketmakanan', compact('users'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('user.paketmakanan', compact('user'), ['type_menu' => 'product']);
    }
}
