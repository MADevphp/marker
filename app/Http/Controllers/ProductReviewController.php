<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index(Product $product)
    {
        return $this->response([
            'overall_rating' => round($product->ratings()->avg('rating'), 1),
            'reviews_count' => $product->ratings()->count(),
            'reviews' => ReviewResource::collection($product->ratings()->paginate(2))
        ]);
    }

    public function store(StoreReviewRequest $request, Product $product)
    {
        $product->ratings()->create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);

        return $this->success('created review');
    }
}
