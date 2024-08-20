<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController
{
    public function index(Request $request)
    {
        if ($request->has('for')) {
            return Status::where('for', $request['for'])->get();
        }

        return Status::all();
    }
}
