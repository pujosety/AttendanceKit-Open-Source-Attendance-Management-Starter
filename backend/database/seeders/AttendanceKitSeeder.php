<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class AttendanceKitSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Setting::create([
            'key' => 'app.check_in_radius_m',
            'group' => 'attendance',
            'type' => 'int',
            'value' => 200,
        ]);

        Setting::create([
            'key' => 'app.check_out_auto_enabled',
            'group' => 'attendance',
            'type' => 'bool',
            'value' => false,
        ]);
    }
}
