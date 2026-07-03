<?php

namespace App\Providers;

use App\Repositories\AttendanceRepository;
use App\Repositories\LeaveRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\ReportRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AttendanceKitServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UserRepository::class, fn() => new UserRepository());
        $this->app->singleton(AttendanceRepository::class, fn() => new AttendanceRepository());
        $this->app->singleton(ReportRepository::class, fn() => new ReportRepository());
        $this->app->singleton(LeaveRepository::class, fn() => new LeaveRepository());
        $this->app->singleton(NotificationRepository::class, fn() => new NotificationRepository());
    }

    public function boot(): void
    {
        //
    }
}
