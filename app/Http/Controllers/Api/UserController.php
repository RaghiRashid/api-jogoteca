<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController
{
    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        return response()->json(User::create($data), 201);
    }
}
