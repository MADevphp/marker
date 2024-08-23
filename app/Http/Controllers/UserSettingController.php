<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Http\Requests\StoreUserSettingRequest;
use App\Http\Requests\UpdateUserSettingRequest;

class UserSettingController extends Controller
{
    public function index()
    {
        //
    }

    public function store(StoreUserSettingRequest $request)
    {
        $userSetting = auth()->user()->settings()->create([
            'setting_id' => $request->setting_id,
            'value_id' => $request->value_id ?? null,
            'switch' => $request->switch ?? null,
        ]);

        return $this->success("user setting created successfully", $userSetting);
    }

    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        //
    }

    public function destroy(UserSetting $userSetting)
    {
        //
    }
}
