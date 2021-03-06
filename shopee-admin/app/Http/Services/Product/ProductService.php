<?php

namespace App\Http\Services\Product;

use App\Models\Product;

class ProductService
{
    const LIMIT = 16;
    public function get()
    {

        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->orderByDesc('id')

            ->get();
    }
}
