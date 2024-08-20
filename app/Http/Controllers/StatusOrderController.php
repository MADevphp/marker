<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeOrderStatusRequest;
use App\Models\Order;
use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusOrderController extends Controller
{
    public function store(Status $status, ChangeOrderStatusRequest $request)
    {
        $order = Order::find($request['order_id']);

        $order->update(['status_id' => $status->id]);

        return response()->json(['success' => true], 200);
    }
}
