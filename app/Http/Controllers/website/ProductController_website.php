<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\website\ProductModal_website;

class ProductController_website extends Controller
{
    public function showProducts()
    {
        // Fetch products with selected columns only
        $products = ProductModal_website::select('id', 'name', 'price', 'rating', 'category', 'image', 'description')->get();
        return view('products.products', ['products' => $products]);
    }

    public function showProductsSlideShow()
    {
        // Fetch products with selected columns only
        $products = ProductModal_website::select('id', 'name', 'price', 'rating', 'category', 'image', 'description', 'productLink')->get();
        return view('cleaning-and-sealing-service.sealing-services', ['products' => $products]);
    }
}