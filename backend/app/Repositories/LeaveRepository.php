<?php

namespace App\Repositories;

use App\Models\Leave;
use App\Models\User;

class LeaveRepository
{
    public function forUser(User $user)
    {
        return Leave::where('user_id', $user->id)->latest()->get();
    }

    public function create(User $user, array $data): Leave
    {
        return Leave::create(array_merge($data, [
            'user_id' => $user->id,
            'status' => 'pending',
        ]));
    }
}
