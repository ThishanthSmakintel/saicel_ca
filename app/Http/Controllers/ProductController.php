<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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
            return view('dashboard.pages.view-all-products', ['products' => $products]);
        } catch (\Exception $e) {
            // Handle the exception here
            return view('error')->with('message', 'Internal Server Error: ' . $e->getMessage());
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
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'price' => 'required|numeric',
                'rating' => 'required|integer|min:0|max:5',
                'category' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'productLink' => 'nullable',
            ]);

            // If validation fails, return error response
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'errors' => $validator->errors(),
                ], 422); // 422 Unprocessable Entity
            }

            // Create the product without the image URL
            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'rating' => $request->input('rating'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'productLink' => $request->input('productLink')
            ]);

            // Check if an image was provided
            if ($request->hasFile('image')) {
                // Retrieve the uploaded image
                $uploadedImage = $request->file('image');

                // Generate a unique image name
                $imageName = auth()->id() . '_' . $product->name . '_' . time() . '.' . $uploadedImage->getClientOriginalExtension();
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

            // Construct the full image URL
            $imageUrl = asset($product->image); // Assuming 'image' field contains the relative path

            return response()->json([
                'status' => 'success',
                'message' => 'Product retrieved successfully',
                'data' => [
                    'product' => $product,
                    'image_url' => $imageUrl
                ]
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
                'description' => 'nullable',
                'image' => 'nullable',
            ]);

            // Initialize imageUrl variable
            $imageUrl = $product->image;

            // Check if image was provided
            if ($request->has('image')) {
                $imageData = $request->input('image');

                // Check if the image data is a Base64 encoded string
                if (preg_match('/^data:image\/(\w+);base64,/', $imageData, $type)) {
                    // Extract the image type
                    $type = strtolower($type[1]); // jpg, png, gif, etc.

                    // Check if the provided type is supported
                    if (!in_array($type, ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Invalid image type',
                            'data' => null
                        ], 400); // 400 Bad Request
                    }

                    // Decode the Base64 string
                    $imageData = substr($imageData, strpos($imageData, ',') + 1);
                    $imageData = base64_decode($imageData);

                    // Generate a unique image name
                    $imageName = time() . '.' . $type;

                    // Save the decoded image to the desired location
                    file_put_contents(public_path('images/product-images/uploaded-images/') . $imageName, $imageData);

                    // Construct the image URL
                    $imageUrl = 'images/product-images/uploaded-images/' . $imageName;
                } else {
                    // Assume it's a regular file upload
                    $uploadedImage = $request->file('image');

                    // Generate a unique image name
                    $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();

                    // Move the uploaded image to the desired location
                    $uploadedImage->move(public_path('images/product-images/uploaded-images/'), $imageName);

                    // Construct the image URL
                    $imageUrl = 'images/product-images/uploaded-images/' . $imageName;
                }
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
