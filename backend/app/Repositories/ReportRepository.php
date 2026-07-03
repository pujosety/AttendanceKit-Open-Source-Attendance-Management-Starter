<?php

namespace App\Repositories;

use App\Models\Report;
use App\Models\User;

class ReportRepository
{
    public function forUser(User $user)
    {
        return Report::where('user_id', $user->id)->latest()->get();
    }

    public function create(User $user, array $data): Report
    {
        return Report::create(array_merge($data, [
            'user_id' => $user->id,
        ]));
    }
}
