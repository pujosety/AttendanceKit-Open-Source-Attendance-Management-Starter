<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(protected UserRepository $users) {}

    public function me(Request $request)
    {
        return $this->ok($request->user());
    }

    public function update(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'phone' => 'nullable|string|max:50',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $request->user()->update($v->validated());

        return $this->ok($request->user(), 'Profile updated');
    }
}
