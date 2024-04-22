<!-- resources/views/admin/products/edit.blade.php -->

@extends('layouts.sidebaradmin')

@section('menuProduk', 'active')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Produk</div>
                <div class="card-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk:</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}" />
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input type="text" class="form-control" name="harga" value="{{ $product->harga }}" />
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar:</label>
                            <input type="file" class="form-control" name="gambar" />
                            @if ($product->gambar)
                            <img src="{{ asset('gambar_produk/' . $product->gambar) }}" alt="Gambar Produk" style="max-width: 200px; margin-top: 10px;" />
                            @else
                            <p>Tidak Ada Gambar</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
