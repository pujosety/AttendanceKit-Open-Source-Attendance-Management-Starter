<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\AttendanceRepository;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function __construct(protected AttendanceRepository $attendances) {}

    public function index(Request $request)
    {
        $data = $this->attendances->forUser($request->user());

        return $this->ok($data);
    }

    public function checkIn(Request $request)
    {
        $v = Validator::make($request->all(), [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'address' => 'nullable|string',
            'photo_url' => 'nullable|string',
            'device_info' => 'nullable|array',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $user = $request->user();

        $open = $user->attendances()->whereNull('checked_out_at')->latest()->first();

        if ($open) {
            return $this->fail('Please check out from previous attendance first', 409);
        }

        $data = $this->attendances->createOpen($user, $v->validated() + [
            'type' => 'check_in',
            'ip_address' => $request->ip(),
        ]);

        return $this->ok($data, 'Checked in', 201);
    }

    public function checkOut(Request $request)
    {
        $v = Validator::make($request->all(), [
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'address' => 'nullable|string',
            'photo_url' => 'nullable|string',
            'device_info' => 'nullable|array',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $open = $request->user()
            ->attendances()
            ->whereNull('checked_out_at')
            ->latest()
            ->first();

        if (! $open) {
            return $this->fail('No active attendance to check out', 409);
        }

        $updated = $this->attendances->close($open, $v->validated() + [
            'type' => 'check_out',
            'ip_address' => $request->ip(),
        ]);

        return $this->ok($updated, 'Checked out');
    }
}
