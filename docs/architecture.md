# Architecture

## Backend

- Laravel 12-style routing and manual bootstrap
- API controllers under `backend/app/Http/Controllers/Api`
- Repository + service separation
- Config split into `backend/config/*.php`
- Migrations with foreign keys and indexes

## Mobile

- Flutter client with feature-first layout
- Dio HTTP client via `AttendanceKitService`
- Local storage abstraction in `LocalSources`
- Offline queue in `core/utils/offline_queue.dart`
- Platform-aware behavior via `PlatformProxy`

## Data Flow

```text
mobile UI -> feature page -> service -> DioClient -> backend API
backend API -> controller -> repository -> model -> database
```

## Why this structure

- Keeps mobile and backend loosely coupled
- Makes API migration easier
- Supports local-only workflows when offline
