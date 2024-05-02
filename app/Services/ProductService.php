<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductBySlug($slug)
    {
        return Product::where('slug', $slug)->first();
    }
}
