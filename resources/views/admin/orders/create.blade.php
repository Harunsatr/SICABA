@extends('layouts.sidebaradmin')

@section('menuOrders', 'active')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Order</div>
                <div class="card-body">
                    <form action="{{ route('admin.orders.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">User :</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_id">Product :</label>
                            <select name="product_id" id="product_id" class="form-control">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah :</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number :</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status :</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
