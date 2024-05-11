@extends('dashboard.default')

@section('title', 'Saicel dashboard')

@section('dashboardContent')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <button type="button" class="btn btn-primary mb-3 float-right" id="showAddProductModal" data-toggle="modal"
                        data-target="#addProductModal">Add New
                        Product</button>
                </div>
                @forelse ($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card product-card">
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">${{ $product->price }}</p>
                                <p class="card-text">Rating: {{ $product->rating }}</p>
                                <p class="card-text">Category: {{ $product->category }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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

    <!-- Modal for adding a new product -->

    <!-- Modal for adding a new product -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="name" required>
                            <div class="invalid-feedback">Please enter a product name.</div>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="number" class="form-control" id="productPrice" name="price" required>
                            <div class="invalid-feedback">Please enter a valid price.</div>
                        </div>
                        <div class="form-group">
                            <label for="productRating">Rating</label>
                            <input type="number" class="form-control" id="productRating" name="rating" min="0"
                                max="5" required>
                            <div class="invalid-feedback">Please enter a rating between 0 and 5.</div>
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Category</label>
                            <input type="text" class="form-control" id="productCategory" name="category" required>
                            <div class="invalid-feedback">Please enter a category.</div>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Description</label>
                            <textarea class="form-control" id="productDescription" name="description" required></textarea>
                            <div class="invalid-feedback">Please enter a description.</div>
                        </div>
                        <div class="form-group">
                            <label for="productImage">Image</label>
                            <div class="input-group divUploadImage">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="productImage" name="image"
                                        accept="image/*" required>
                                    <label class="custom-file-label" for="productImage">Choose file</label>
                                    <div class="invalid-feedback">Please select an image file.</div>
                                </div>
                            </div>
                            <!-- Image preview container -->
                            <div id="imagePreview" class="mt-2"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
