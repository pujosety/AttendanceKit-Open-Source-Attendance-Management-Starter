<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\LeaveRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{
    public function __construct(protected LeaveRepository $leaves) {}

    public function index(Request $request)
    {
        return $this->ok(
            $this->leaves->forUser($request->user())
        );
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'type' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'reason' => 'required|string',
            'attachment_url' => 'nullable|string',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $data = $this->leaves->create($request->user(), $v->validated());

        return $this->ok($data, 'Leave request created', 201);
    }
}
