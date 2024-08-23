<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    public function index()
    {
        return response(auth()->user()->reviews()->with('product')->paginate(12));
    }

    public function store(StoreReviewRequest $request)
    {
        //
    }

    public function show(Review $review)
    {
        //
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }
}
