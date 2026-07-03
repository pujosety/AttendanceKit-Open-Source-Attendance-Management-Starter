<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\NotificationRepository;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct(protected NotificationRepository $notifications) {}

    public function index(Request $request)
    {
        return $this->ok(
            $this->notifications->forUser($request->user()->id)
        );
    }

    public function markAsRead(Request $request, string $id)
    {
        $model = Notification::where('id', $id)
            ->where('user_id', $request->user()->id)
            ->firstOrFail();

        $updated = $this->notifications->markRead($model);

        return $this->ok($updated);
    }
}
