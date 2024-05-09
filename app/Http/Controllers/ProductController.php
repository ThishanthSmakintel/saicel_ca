<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Products retrieved successfully',
                'data' => $products
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Store a newly created resource in storage.|url|url
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'rating' => 'required|integer|min:0|max:5',
                'category' => 'required',
                'description' => 'required',
                'image_url' => 'null|url', // Assuming image URL is sent separately
            ]);

            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'rating' => $request->input('rating'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'image' => $request->input('image_url'), // Assigning image URL directly
            ]);

            $product->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Product created successfully',
                'data' => $product
            ], 201); // 201 Created
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found',
                    'data' => null
                ], 404); // 404 Not Found
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Product retrieved successfully',
                'data' => $product
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found',
                    'data' => null
                ], 404); // 404 Not Found
            }

            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'rating' => 'required|integer|min:0|max:5',
                'category' => 'required',
                'description' => 'required',
                'image_url' => 'null|url', // Assuming image URL is sent separately
            ]);

            $product->name = $request->get('name');
            $product->price = $request->get('price');
            $product->rating = $request->get('rating');
            $product->category = $request->get('category');
            $product->description = $request->get('description');
            $product->image = $request->input('image_url'); // Assigning image URL directly

            $product->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully',
                'data' => $product
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found',
                    'data' => null
                ], 404); // 404 Not Found
            }

            $product->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Product deleted successfully',
                'data' => null
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Upload image file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImage(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('image')) {
                // Upload image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/product-images/uploaded-images/'), $imageName);

                $imageUrl = '/images/product-images/uploaded-images/' . $imageName;

                return response()->json([
                    'status' => 'success',
                    'message' => 'Image uploaded successfully',
                    'data' => $imageUrl
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'No image uploaded',
                    'data' => null
                ], 400); // 400 Bad Request
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
                'data' => null
            ], 500); // 500 Internal Server Error
        }
    }
}
