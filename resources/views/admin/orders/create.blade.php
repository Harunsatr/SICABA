@extends('layouts.sidebaradmin')

@section('menuOrders', 'active')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Pemesanan</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.orders.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_id">Produk</label>
                            <select class="form-control" id="product_id" name="product_id">
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Jumlah</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">No Handphone</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Buat Pemesanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
