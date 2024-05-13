@extends('dashboard.default')

@section('title', 'Saicel dashboard')

@section('dashboardContent')
    <style>
        .product-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
            /* Set height to ensure all cards have the same height */
        }

        .product-card:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .product-card .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
            /* Ensure the image covers the entire space */
            height: 200px;
            /* Set a fixed height for the image */
        }

        .product-card .card-body {
            padding: 1.5rem;
            height: calc(100% - 200px);
            /* Calculate height for the card body */
            display: flex;
            /* Use flexbox to align content vertically */
            flex-direction: column;
            /* Stack content vertically */
        }

        .product-card .btn.dropdown-toggle {
            border-radius: 20px;
        }

        .product-card .card-title {
            font-weight: bold;
        }

        .product-card .card-text {
            color: #6c757d;
        }

        .loader {
            width: 48px;
            height: 48px;
            display: block;
            margin: 15px auto;
            position: relative;
            color: #ccc;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .loader::after,
        .loader::before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            width: 24px;
            height: 24px;
            top: 50%;
            left: 50%;
            transform: scale(0.5) translate(0, 0);
            background-color: #ccc;
            border-radius: 50%;
            animation: animloader 1s infinite ease-in-out;
        }

        .loader::before {
            background-color: #000;
            transform: scale(0.5) translate(-48px, -48px);
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animloader {
            50% {
                transform: scale(1) translate(-50%, -50%);
            }
        }

        /* END Loader style */
        .content {
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
    </style>

    <div class="content">
        <div id="loader" class="text-center">
            <span class="loader"></span>
        </div>
        <div id="productContent" style="display: none;"> <!-- Hide product content initially -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <button type="button" class="btn btn-primary mb-3 float-right" id="showAddProductModal"
                            data-toggle="modal" data-target="#addProductModal">Add New Product</button>
                    </div>
                    @forelse ($products as $product)
                        <div class="col-md-3 mb-4"> <!-- Set col size to 3 to fit 4 cards per row -->
                            <div class="card product-card h-80">
                                <img src="{{ asset($product->image) }}" class="card-img-top img-fluid h-100"
                                    alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">${{ $product->price }}</p>
                                    <p class="card-text"> <!-- Star rating -->
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $product->rating)
                                                <i class="fas fa-star"></i> <!-- Font Awesome star icon -->
                                            @else
                                                <i class="far fa-star"></i> <!-- Font Awesome empty star icon -->
                                            @endif
                                        @endfor
                                    </p>
                                    <p class="card-text">Category: {{ $product->category }}</p>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-id="{{ $product->id }}">Edit</button>
                                            <button class="dropdown-item" data-id="{{ $product->id }}">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="alert alert-warning" role="alert">
                                No products found.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 65vw;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form content -->
                    <form id="addProductForm">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productImage">Product Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="productImage" name="image"
                                            accept="image/*">
                                        <label class="custom-file-label" for="productImage">Choose file</label>
                                    </div>
                                    <!-- Image preview container -->
                                    <div id="imagePreview" class="mt-2 text-center"></div>
                                    <div class="text-center mb-3">
                                        <button type="button" class="btn btn-primary" id="cropImageButton"
                                            style="display:none;">Crop Image</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="productName">Product Name</label>
                                            <input type="text" class="form-control" id="productName" name="productName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="productPrice">Price</label>
                                            <input type="number" class="form-control" id="productPrice"
                                                name="productPrice">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="productRating">Rating</label>
                                            <input type="number" class="form-control" id="productRating"
                                                name="productRating" min="0" max="5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="productCategory">Category</label>
                                            <input type="text" class="form-control" id="productCategory"
                                                name="productCategory">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="productDescription">Description</label>
                                            <textarea class="form-control mt-2" id="productDescription" name="productDescription" rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Add Product button -->
                <div class="modal-footer text-right">
                    <button class="btn btn-primary addNewProduct" id="btnAddNewProduct">
                        Add Product
                        <span>
                            <div class="buttonLoader
                        d-none">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>










@endsection
