@extends('panel.layouts.app')

@section('content')

@section('content')
<div class="home-page">
        <section class="hero text-center text-black d-flex align-items-center justify-content-center" 
                 style="background-image: url('') }}/assets/img/banner.jpeg; background-size: cover; background-position: center;">
            <div class="hero-content">
            <h1>Welcome to Our Easy Store</h1>
                <p>Find the best products at unbeatable prices.</p>
                <a href="#" class="btn btn-primary">Shop Now</a> 
            </div>
        </section>

    <h2 class="mb-4">Featured Products</h2>
    <div class="row">


        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ url('') }}/assets/img/11.png" class="card-img-top" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Stylish T-Shirt</h5>
                    <p class="card-text text-muted">$25.00</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ url('') }}/assets/img/22.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Casual Jeans</h5>
                    <p class="card-text text-muted">$40.00</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ url('') }}/assets/img/3.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Elegant Dress</h5>
                    <p class="card-text text-muted">$60.00</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mb-4">Shop by Category</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="category-banner position-relative">
                <img src="{{ url('') }}/assets/img/category-men.jpeg" class="img-fluid" alt="Men's Clothing">
                <div class="overlay position-absolute top-50 start-50 translate-middle text-white">
                    <h3>Men's Clothing</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="category-banner position-relative">
                <img src="{{ url('') }}/assets/img/category-women.jpeg" class="img-fluid" alt="Women's Clothing">
                <div class="overlay position-absolute top-50 start-50 translate-middle text-white">
                    <h3>Women's Clothing</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
        .hero {
            text-align: center;
            padding: 50px;
            background-color:rgb(250, 250, 217);
    
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        </style>

@endsection
