# Architecture

## Backend
- Laravel 12 style with manual bootstrap
- Controllers under `app/Http/Controllers/Api`
- Services and repository pattern
- Config split into `config/*.php`
- Migrations with proper foreign keys

## Mobile
- Flutter + Riverpod state management
- Clean architecture layers: data/domain/presentation
- Freezed models with JSON serialization
- Dio HTTP client
- Platform-aware services via `PlatformProxy`
