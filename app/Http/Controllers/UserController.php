<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{

    public function show()
    {
        $user = User::query()->firstOrFail();
        return view("admin.user.show", compact("user"));
    }

    public function edit()
    {
        $user = User::query()->firstOrFail();
        return view("admin.user.edit", compact("user"));
    }

    public function update(UserRequest $request)
    {
        $user = User::query()->firstOrFail();
        $user->update($request->validated());

        return redirect()->route("admin.profile.show");
    }

}
