<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::cursorPaginate(10));
    }

    public function show($id)
    {
        return Product::with('stocks')->find($id);
    }

    public function store(StoreProductRequest $request)
    {
        //
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

    public function related(Product $product)
    {
        return $this->response(
            ProductResource::collection(
                Product::query()
                    ->where('category_id', $product->category_id)
                    ->orderBy('how_much_sold')
                    ->limit(15)
                    ->get()
            )
        );
    }
}
