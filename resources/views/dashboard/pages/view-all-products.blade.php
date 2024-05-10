@extends('dashboard.default')

@section('title', 'Saicel dashboard')

@section('dashboardContent')
    <!-- Navbar -->

    <h1>Products</h1>

    @if (isset($products) && count($products) > 0)
        <ul>
            @foreach ($products['data'] as $product)
                <li>
                    <h2>{{ $product['name'] }}</h2>
                    <p>Price: ${{ $product['price'] }}</p>
                    <p>Rating: {{ $product['rating'] }}</p>
                    <p>Category: {{ $product['category'] }}</p>
                    <p>Description: {{ $product['description'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif

@endsection
