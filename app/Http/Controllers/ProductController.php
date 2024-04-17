<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        $product = new Product([
            'nama_produk' => $request->get('nama_produk'),
            'harga' => $request->get('harga'),
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar_produk'), $nama_gambar);
            $product->gambar = $nama_gambar;
        }

        $product->save();

        return redirect('/products')->with('success', 'Product has been added');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        $product = Product::find($id);
        $product->nama_produk = $request->get('nama_produk');
        $product->harga = $request->get('harga');

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar_produk'), $nama_gambar);
            $product->gambar = $nama_gambar;
        }

        $product->save();

        return redirect('/products')->with('success', 'Product has been updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product has been deleted');
    }
}
