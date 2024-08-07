<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'delivery_method_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'comment' => 'nullable|max:600',
            'products' => 'required|array:product_id,stock_id,quantity',
            'products.*.product_id' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
            'products.*.quantity' => 'required|numeric',
        ];
    }
}
