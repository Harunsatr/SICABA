<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductsController extends Controller
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
        // Validasi input
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar_produk'), $nama_gambar);
        } else {
            $nama_gambar = null;
        }

        // Simpan data produk
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'gambar' => $nama_gambar,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data produk yang akan diupdate
        $product = Product::findOrFail($id);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar_produk'), $nama_gambar);
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                unlink(public_path('gambar_produk/' . $product->gambar));
            }
            $product->gambar = $nama_gambar;
        }

        // Update data produk
        $product->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data produk
        $product = Product::findOrFail($id);
        if ($product->gambar) {
            unlink(public_path('gambar_produk/' . $product->gambar));
        }
        $product->delete();

        return redirect()->to('products')->with('success', 'User deleted successfully.');
    }
}
