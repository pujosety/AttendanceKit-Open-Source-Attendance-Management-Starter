<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(protected UserRepository $users) {}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (! Auth::attempt($request->only('email', 'password'))) {
            return $this->fail('Invalid credentials', 401, [
                ['email' => ['Invalid credentials.']],
            ]);
        }

        $user = $this->users->findByEmail($request->email);

        if (! $user || $user->status !== 'active') {
            Auth::logout();

            return $this->fail('Account inactive', 403);
        }

        $token = $user->createToken('attendance-kit')->plainTextToken;

        return $this->ok([
            'token' => $token,
            'token_type' => 'bearer',
            'user' => $user,
        ], 'Authenticated');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->ok(null, 'Logged out');
    }
}
