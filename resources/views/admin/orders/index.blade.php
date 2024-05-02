@extends('layouts.sidebaradmin')

@section('menuOrders', 'active')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Daftar Order</div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Tambah Order</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Jumlah</th>
                                <th>Phone Number</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->product->nama_produk }}</td>
                                <td>{{ $order->jumlah }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->alamat }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
