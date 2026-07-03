# Installation
## Backend
- PHP 8.3+ with Composer
- MySQL 8.+ and Redis recommended
- Steps:
  1. `cd backend && composer install`
  2. copy `.env.example` to `.env`
  3. `php artisan key:generate`
  4. `php artisan migrate --seed`

Environment variables live in backend `.env`:
- `DB_CONNECTION`, `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- `REDIS_HOST`
- `JWT_SECRET`

## Mobile
- Flutter 3.4+
- Steps:
  1. `cd mobile`
  2. `flutter pub get`
  3. `flutter run`

> Demo account: `admin@example.com` / `password`

# API Documentation

Base URL: `http://localhost:8000/api/v1`

## Mobile Data Flow
- `DioClient` -> `AttendanceKitService`
- Token stored in secure storage via `AuthLocalSource`
- Offline queue stored in secure storage
- Notifications initialized via `PlatformProxy`
- Model local storage via `FileStorage`

# Contributing
- Fork / branch off `main`
- Keep PR scoped to one concern
- Update docs for any new route/field
