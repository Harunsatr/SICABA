@extends('layouts.master')
@section('content')

<!-- resources/views/cart/index.blade.php -->

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@foreach($orders as $order)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $order->product->nama_produk }}</h5>
            <p class="card-text">Quantity: {{ $order->quantity }}</p>
            <p class="card-text">Phone Number: {{ $order->phone_number }}</p>
            <p class="card-text">Address: {{ $order->address }}</p>
            <form action="{{ route('cart.destroy', $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endforeach

@endsection