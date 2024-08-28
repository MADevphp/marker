<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use Illuminate\Http\JsonResponse;

class UserAddressController extends Controller
{
    public function index(): JsonResponse
    {
        return $this->response(auth()->user()->addresses);
    }

    public function store(StoreUserAddressRequest $request)
    {
        $address = auth()->user()->addresses()->create($request->toArray());

        return $this->success('shipping address created.', $address);
    }

    public function show(UserAddress $userAddress)
    {
        //
    }

    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
