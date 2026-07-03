# Troubleshooting

## Backend
- Ensure Composer and PHP 8.3+ installed
- Ensure MySQL service running
- Ensure storage permissions writable

## Mobile
- Ensure Flutter 3.4+ installed
- Use `flutter clean` if build cache corrupted
- Ensure API base URL reachable from device

## Docker
- Stop conflicting containers on ports 80/3306
- Rebuild if base images change: `docker compose build --no-cache`

## Error logs
- Backend logs: `storage/logs/laravel.log`
- Mobile logs: IDE console output
