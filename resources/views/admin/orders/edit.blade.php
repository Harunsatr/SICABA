@extends('layouts.sidebaradmin')

@section('menuOrders', 'active')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pemesanan</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $order->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_id">Produk</label>
                            <select class="form-control" id="product_id" name="product_id">
                                @foreach($products as $product)
                                <option value="{{ $product->nama_produk }}" {{ $product->nama_produk == $order->nama_produk ? 'selected' : '' }}>{{ $product->nama_produk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Jumlah</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="{{ $order->quantity }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">No Handphone</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $order->phone_number }}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address" required>{{ $order->address }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{ $order->status }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Pemesanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection