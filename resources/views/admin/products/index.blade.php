<!-- resources/views/admin/products/index.blade.php -->

@extends('layouts.sidebaradmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Produk</div>
                <div class="card-body">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-2">Tambah Produk</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
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
