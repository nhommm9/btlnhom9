<?php

namespace App\Http\Controllers;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $product;
    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return view('main', [
            "title" => "Trang chủ Shopee",
            'products' => $this->product->get()
        ]);
    }
}
