# Installation

Choose your path:

- **Recommended:** Docker Compose for fastest start.
- **Custom:** Manual backend + mobile setup when you need full control.

## Docker Compose

```bash
docker compose up
```

Wait for backend and database health checks, then continue to manual verification below.

## Backend

Requirements: PHP 8.3+, Composer, MySQL 8+, Redis recommended.

```bash
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
```

## Mobile

Requirements: Flutter 3.4+, device emulator or physical device.

```bash
cd mobile
flutter pub get
flutter run
```

Use the demo account in `docs/demo.md` or create a user via API.

## First login

- Base API: `http://localhost:8000/api/v1`
- Demo email: `admin@example.com`
- Demo password: `password`

## Postman

Import `postman/attendance-kit.postman_collection.json` to explore endpoints without building the mobile app.
