@extends('layouts.user')

@section('title', 'Home')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('contents')

<header class="header">
    <h1 class="header-title">Trang chủ</h1>
</header>

<hr />

<main class="container">
    <h1 class="title">Our Products</h1>

    <div class="product-grid">
        @if($products->count() > 0)
            @foreach($products as $product)
            <div class="product-card">
                <div class="product-image-container">
                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->title }}" class="product-image">
                </div>

                <div class="product-content">
                    <h2 class="product-title">{{ $product->title }}</h2>
                    <p class="product-price">{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>


               
                    <div class="product-actions">
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn-detail">
                            <i class="fas fa-eye"></i> View Details
                        </a>  
                        <button type="submit" class="btn-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>                
                        
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p class="no-products">No products found</p>
        @endif
    </div>


</main>

@endsection
