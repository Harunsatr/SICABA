<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;

class OrderUserController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('create-order', compact('products'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string'
        ]);

        $data = $request->all();
        $data['user_id'] = $user->id;

        Order::create($data);

        return redirect()->back()->with('success', 'Order created successfully.');
    }
}
