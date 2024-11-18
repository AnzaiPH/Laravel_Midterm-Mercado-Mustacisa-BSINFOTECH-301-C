@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="p-4" style="background-color: #f5f5f5; border-radius: 8px;">
    <div class="d-flex justify-content-between mb-3">
        <h2>Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-info">Add New Product</a>
    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Php {{ number_format($product->price, 2) }}</strong></p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
