<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index()
    {
        return auth()->user()->favorites()->paginate(9);
    }

    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy($favorite_id)
    {
        if (auth()->user()->hasFavorite($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);

            return response()->json([
                'success' => true
            ]);
        }
        return response()->json([
            'success' => false,
        ]);
    }
}
