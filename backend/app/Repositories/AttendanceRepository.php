<?php

namespace App\Repositories;

use App\Models\Attendance;
use App\Models\User;

class AttendanceRepository
{
    public function forUser(User $user)
    {
        return Attendance::where('user_id', $user->id)->latest()->get();
    }

    public function createOpen(User $user, array $data): Attendance
    {
        return Attendance::create(array_merge($data, [
            'user_id' => $user->id,
            'status' => 'pending',
        ]));
    }

    public function close(Attendance $attendance, array $data): Attendance
    {
        $attendance->update($data);
        return $attendance->fresh();
    }
}
