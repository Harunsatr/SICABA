<!-- resources/views/admin/products/index.blade.php -->

@extends('layouts.sidebaradmin')

@section('content')
@section('menuProduk', 'active')

<style>
    .product-cart {
        margin-top: 20px;
        margin-left: 10rem;
    }
</style>
<div class="container">
    <div class="row">
        <div class="">
            <div class="card product-cart">
                <div class="card-header">Daftar Produk</div>
                <div class="card-body">
                    <a href="{{ url('/product/create') }}" class="btn btn-primary mb-2">Tambah Produk</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>
                                    @if ($product->gambar)
                                    <img src="{{ asset('gambar_produk/' . $product->gambar) }}" alt="Gambar Produk" style="max-width: 100px;">
                                    @else
                                    Tidak Ada Gambar
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
