<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ReportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function __construct(protected ReportRepository $reports) {}

    public function index(Request $request)
    {
        return $this->ok(
            $this->reports->forUser($request->user())
        );
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'attendance_id' => 'nullable|exists:attendances,id',
        ]);

        if ($v->fails()) {
            return $this->fail('Validation failed', 422, $v->errors());
        }

        $data = $this->reports->create($request->user(), $v->validated());

        return $this->ok($data, 'Report saved', 201);
    }
}
