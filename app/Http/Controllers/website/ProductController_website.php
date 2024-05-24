<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\ProductModal_website;

class ProductController_website extends Controller
{
    public function showProducts()
    {

        $products = ProductModal_website::select('id', 'name', 'price', 'rating', 'category', 'image', 'description')->get();
        return view('products.view-all-products', ['products' => $products]);
    }

    public function showProductsSlideShow()
    {

        $products = ProductModal_website::select('id', 'name', 'price', 'rating', 'category', 'image', 'description', 'productLink')->get();
        return view('cleaning-and-sealing-service.sealing-services', ['products' => $products]);
    }

    public function showThisProduct($specificId)
    {

        $specificProduct = ProductModal_website::select('id', 'name', 'price', 'rating', 'category', 'image', 'description', 'productLink')
            ->where('id', $specificId)
            ->get();


        $allProducts = ProductModal_website::all();

        return view('products.view-current-product', ['specificProduct' => $specificProduct, 'allProducts' => $allProducts]);
    }
}
