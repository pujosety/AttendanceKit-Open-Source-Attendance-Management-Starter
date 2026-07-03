<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return $this->ok($request->user());
    }

    public function update(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'phone' => 'nullable|string|max:50',
            // Assume avatar upload via separate endpoint/service in real systems
            'avatar_url' => 'nullable|string|max:500',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $user = $request->user();
        $user->update($v->validated());

        return $this->ok($user);
    }
}
