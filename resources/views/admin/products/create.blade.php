<!-- resources/views/admin/products/create.blade.php -->

@extends('layouts.sidebaradmin')

@section('menuProduk', 'active')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Produk</div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk:</label>
                            <input type="text" class="form-control" name="nama_produk"/>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input type="text" class="form-control" name="harga"/>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar:</label>
                            <input type="file" class="form-control" name="gambar"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
