@extends('default')

@section('title', 'Our Awesome Products')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 1rem;
            height: 100%;
        }

        .card-img-top {
            object-fit: cover;
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .card-price {
            font-size: 1rem;
            color: #007bff;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .card-rating {
            font-size: 1rem;
            color: #28a745;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .card-category {
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .card-description {
            text-align: center;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .card {
                margin-bottom: 2rem;
            }

            .col-md-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <div class="container">
        <h1 class="text-center mb-4">Our Awesome Products</h1>
        <h4 class="text-center mb-4">Explore our wide range of high-quality products</h4>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-price"><strong>${{ number_format($product['price'], 2) }}</strong></p>
                            <p class="card-rating">
                                {!! str_repeat('<i class="fas fa-star"></i>', intval($product['rating'])) .
                                    str_repeat('<i class="far fa-star"></i>', 5 - intval($product['rating'])) !!}
                            </p>
                            <p class="card-category">{{ $product['category'] }}</p>
                            <p class="card-description">{{ $product['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
