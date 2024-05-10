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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'rating' => 'required|integer|min:0|max:5',
                'category' => 'required',
                'description' => 'required',
                'image' => 'nullable', // Add validation for image
            ]);

            // Create the product without the image URL
            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'rating' => $request->input('rating'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
            ]);

            // Check if an image was provided
            if ($request->hasFile('image')) {
                // Retrieve the uploaded image
                $uploadedImage = $request->file('image');

                // Generate a unique image name
                $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();

                // Move the uploaded image to the desired location
                $uploadedImage->move(public_path('images/product-images/uploaded-images/'), $imageName);

                // Construct the image URL
                $imageUrl = 'images/product-images/uploaded-images/' . $imageName;

                // Update the product with the image URL
                $product->image = $imageUrl;
            }

            // Save the product to the database
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
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Initialize imageUrl variable
            $imageUrl = $product->image;

            // Check if image was provided
            if ($request->hasFile('image')) {
                // Retrieve the uploaded image
                $uploadedImage = $request->file('image');

                // Generate a unique image name
                $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();

                // Move the uploaded image to the desired location
                $uploadedImage->move(public_path('images/product-images/uploaded-images/'), $imageName);

                // Construct the image URL
                $imageUrl = 'images/product-images/uploaded-images/' . $imageName;
            }

            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->rating = $request->input('rating');
            $product->category = $request->input('category');
            $product->description = $request->input('description');
            $product->image = $imageUrl;

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
}
