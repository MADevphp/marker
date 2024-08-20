<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Http\Requests\StorePaymentTypeRequest;
use App\Http\Requests\UpdatePaymentTypeRequest;
use Illuminate\Support\Collection;

class PaymentTypeController extends Controller
{
    public function index(): Collection
    {
        return PaymentType::all();
    }
}
