<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserPaymentCardResource;
use App\Models\UserPaymentCards;
use App\Http\Requests\StoreUserPaymentCardsRequest;
use App\Http\Requests\UpdateUserPaymentCardsRequest;

class UserPaymentCardsController extends Controller
{
    public function index()
    {
        return $this->response(UserPaymentCardResource::collection(auth()->user()->paymentCards));
    }

    public function store(StoreUserPaymentCardsRequest $request)
    {
        $payment = auth()->user()->paymentCards()->create([
            "name" =>  encrypt($request->name),
            "number" => encrypt($request->number),
            "expiration_date" => encrypt($request->expiration_date),
            "holder_name" => encrypt($request->holder_name),
            "last_four_number" => encrypt(substr($request->number, -4)),
            "payment_card_type_id" => $request->payment_card_type_id
        ]);

        return $this->success("to'lov amalga oshirildi");
    }

    public function show(UserPaymentCards $userPaymentCards)
    {
        return UserPaymentCards::find($userPaymentCards);
    }

    public function destroy(UserPaymentCards $userPaymentCards)
    {
        //
    }
}
