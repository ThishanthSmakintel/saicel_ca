<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController_website extends Controller
{
    private $products = [
        [
            'name' => 'Green Clear (Formerly Moss Clear) Fast & Easy',
            'price' => '29.95',
            'rating' => 5,
            'category' => 'Green Growth & Algae Remover',
            'image' => 'images/product-images/img-Green_Clear.jpg',
            'description' => 'Powerful Green Growth & Algae Remover - Apply & Leave. For Drives, Roofs, Concrete, Stone, Patios, Tarmac, Wood.'
        ],
        [
            'name' => 'Rapid Thaw - MELT Ice (5kg, 10kg, 20kg)',
            'price' => '29.95',
            'rating' => 5,
            'category' => 'Ice Melt',
            'image' => 'images/product-images/img-rapid_thaw.jpg',
            'description' => 'Alternative to Rock Salt. Plant Safe. For Drives, Patios, Paths. Rapid, non-corrosive de-icer for all surfaces.'
        ],
        [
            'name' => 'Patio Clean Xtreme - Fast, Easy & Effective',
            'price' => '31.95',
            'rating' => 5,
            'category' => 'Patio Cleaner',
            'image' => 'images/product-images/img-block_paving_sealer.jpg',
            'description' => 'Powerful Concentrated Patio Cleaner. Removes Algae, Dirt & Blackspot. Treats 40 m². For Sandstone, Paving Slabs.'
        ],
        [
            'name' => 'Anti-Mould Paint (10 Colours & Samples)',
            'price' => '17.95',
            'rating' => 5,
            'category' => 'Paint',
            'image' => 'images/product-images/img-Anti_Mould_Paint.jpg',
            'description' => 'Acrylic Emulsion. Prevents Growth of Dangerous Mould. 5yr Protection. For Bathrooms, Kitchens, Bedrooms.'
        ],
        [
            'name' => 'Anti-Condensation Paint (10 Colours, 3 Sizes)',
            'price' => '32.95',
            'rating' => 5,
            'category' => 'Paint',
            'image' => 'images/product-images/img-Anti_Condensation_Paint.jpg',
            'description' => 'Acrylic co-polymer emulsion paint. Reduces condensation build-up. Prevents black spot mould. For Walls, Ceilings.'
        ]
    ];

    public function showProducts()
    {
        return view('products.products', ['products' => $this->products]);
    }

    public function showProductsSlideShow()
    {
        return view('cleaning-and-sealing-service.sealing-services', ['products' => $this->products]);
    }
}
