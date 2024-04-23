<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'product')->latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('orders.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'phone_number' => 'required',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $users = User::all();
        $products = Product::all();
        return view('orders.edit', compact('order', 'users', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'phone_number' => 'required',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                         ->with('success', 'Order deleted successfully');
    }
}