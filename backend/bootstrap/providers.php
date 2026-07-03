<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;

return [
    'app' => require base_path('config/app.php'),
    'auth' => require base_path('config/auth.php'),
    'database' => require base_path('config/database.php'),
    'filesystems' => require base_path('config/filesystems.php'),
    'attendance' => require base_path('config/attendance.php'),
];
