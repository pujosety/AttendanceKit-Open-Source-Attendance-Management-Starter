<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| AttendanceKit config
|--------------------------------------------------------------------------
|
| Central settings for AttendanceKit backend behavior.
|
*/

return [
    'app_name' => env('APP_NAME', 'AttendanceKit'),

    'upload' => [
        'max_mb' => 8,
        'paths' => [
            'photo' => 'photos',
            'attachment' => 'attachments',
        ],
    ],

    'queue' => [
        'enabled' => env('ATTENDANCE_QUEUE_ENABLED', false),
    ],

    'sync' => [
        'drift_seconds' => 30,
    ],
];
