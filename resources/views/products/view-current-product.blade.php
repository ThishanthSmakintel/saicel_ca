@extends('default')

@section('title', 'Our Awesome Products')

@section('content')
    <style>
        .product-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .product-description {
            font-size: 1rem;
        }

        .product-details dt {
            font-weight: bold;
        }

        .product-img-container {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
            overflow: hidden;
            border-radius: 4px;
        }

        .product-img {
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
        }

        .spacer {
            margin: 20px 0;
        }
    </style>

    <!-- content -->
    <section class="py-5 card">
        <div class="container">
            @foreach ($specificProduct as $product)
                <div class="row gx-5 mb-4">
                    <div class="col-12">
                        <div class=" h-100 p-4">
                            <div class="row">
                                <aside class="col-lg-6 mb-4 mb-lg-0">
                                    <div
                                        class="border rounded-4 mb-3 d-flex justify-content-center product-img-container  product-card">
                                        <a data-fslightbox="mygallery" class="rounded-4" target="_blank" data-type="image"
                                            href="{{ asset($product['image']) }}">
                                            <img class="rounded-4 product-img my-3" src="{{ asset($product['image']) }}"
                                                alt="{{ $product->name }}" />
                                        </a>
                                    </div>
                                </aside>
                                <main class="col-lg-6">
                                    <div class="ps-lg-3">
                                        <h4 class="product-title text-dark">
                                            {{ $product->name }}
                                        </h4>
                                        <div class="d-flex flex-row my-3">
                                            <div class="text-warning mb-1 me-2">
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($i < floor($product->rating))
                                                        <i class="fa fa-star"></i>
                                                    @elseif ($i < ceil($product->rating))
                                                        <i class="fas fa-star-half-alt"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                                <span class="ms-1">
                                                    {{ $product->rating }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <span class="h5">${{ $product->price }}</span>
                                            <span class="text-muted">/per item</span>
                                        </div>

                                        <p class="product-description">
                                            {{ $product->description }}
                                        </p>

                                        <a href="{{ $product->productLink }}" class="btn btn-warning shadow-0"> Buy now </a>

                                        <hr />
                                    </div>
                                </main>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col-12 -->
                </div> <!-- end row -->
            @endforeach
        </div>
    </section>
    <!-- content -->
    <section>
        <div class="my-3">
            <h2 class="text-center mb-3">Check out our Similar products</h2>
            <div class="product-slider">
                @php
                    $totalProducts = $allProducts->count();
                    $productsPerSlide = 4;
                @endphp

                @for ($slide = 0; $slide < ceil($totalProducts / $productsPerSlide); $slide++)
                    <div class="mx-1">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                            @php
                                $productsInSlide = $allProducts->slice($slide * $productsPerSlide, $productsPerSlide);
                            @endphp
                            @foreach ($productsInSlide as $product)
                                <div class="col">
                                    <a href="{{ route('showThisProduct', ['id' => $product->id]) }}" class="card-link">
                                        <div class="card">
                                            <img class="product-img mx-auto d-block my-3" src="{{ asset($product->image) }}"
                                                alt="{{ $product->name }}" width="150" height="150"
                                                onerror="this.onerror=null;this.src='{{ url('https://via.placeholder.com/150') }}'; this.alt='Image not available';">

                                            <div class="text-center mb-2">
                                                @for ($i = 0; $i < $product->rating; $i++)
                                                    <i class="fas fa-star text-warning" style="font-size: 1.5rem;"></i>
                                                @endfor
                                                @for ($i = $product->rating; $i < 5; $i++)
                                                    <i class="far fa-star text-warning" style="font-size: 1.5rem;"></i>
                                                @endfor
                                            </div>

                                            <p class="text-center">{{ $product->name }}</p>
                                            <p class="text-center"><span class="highlight">${{ $product->price }}</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection
