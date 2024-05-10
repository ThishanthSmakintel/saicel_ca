<?php

namespace App\Http\Controllers\UsingApi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $apiUrl = 'http://127.0.0.1:8000/api/products';

            $response = Http::get($apiUrl);

            if ($response->successful()) {
                $products = $response->json();
                return view('dashboard.pages.view-all-products', ['products' => $products]);
            } else {
                return response()->json(['error' => 'Failed to fetch products'], $response->status());
            }
        } catch (\Exception $e) {
            // Log the exception or handle it in any other appropriate way
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
