@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-4" style="background-color: #f5f5f5; border-radius: 8px;">
        <div class="card mb-3">
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}" style="max-width: 400px; height: auto; margin: auto;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>Price:</strong> Php {{ number_format($product->price, 2) }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Menu</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
