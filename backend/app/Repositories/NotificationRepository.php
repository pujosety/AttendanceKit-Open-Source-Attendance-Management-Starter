<?php

namespace App\Repositories;

use App\Models\Notification;

class NotificationRepository
{
    public function forUser(int $userId)
    {
        return Notification::where('user_id', $userId)->latest()->get();
    }

    public function markRead(Notification $notification): Notification
    {
        $notification->update(['read_at' => now()]);
        return $notification->fresh();
    }

    public function create(int $userId, array $data): Notification
    {
        return Notification::create(array_merge($data, [
            'user_id' => $userId,
        ]));
    }
}
