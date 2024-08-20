<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Http\Requests\StoreDeliveryMethodRequest;
use App\Http\Requests\UpdateDeliveryMedhodRequest;

class DeliveryMethodController extends Controller
{
    public function index()
    {
        return DeliveryMethod::all();
    }

    public function store(StoreDeliveryMethodRequest $request)
    {
        //
    }


    public function update(UpdateDeliveryMedhodRequest $request, DeliveryMethod $deliveryMethod)
    {
        //
    }

    public function destroy(DeliveryMethod $deliveryMethod)
    {
        //
    }
}
