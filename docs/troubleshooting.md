# Troubleshooting

## Backend

- Ensure Composer and PHP 8.3+ installed
- Ensure MySQL service running
- Ensure storage permissions writable
- Run `php artisan optimize:clear` if cache/config errors appear
- Check `storage/logs/laravel.log` for detailed errors

## Mobile

- Ensure Flutter 3.4+ installed
- Use `flutter clean` if the build cache is corrupted
- Ensure the API base URL is reachable from your device
- Check TLS certificate validity for HTTPS backends

## Docker

- Stop conflicting containers on ports 80/3306
- Rebuild after base image changes: `docker compose build --no-cache`
- Use `docker compose logs` for startup failures

## Common Error Patterns

| Symptom | Likely Cause | Fix |
|---|---|---|
| 401 Unauthorized | Invalid token | Relogin or inspect token storage |
| 422 Validation | Missing fields or wrong types | Inspect request body against API docs |
| 500 Server Error | Backend exception | Check `storage/logs/laravel.log` |
| Timeout | Wrong `API_BASE_URL` | Update mobile `.env` and rerun |

## Logs

- Backend logs: `storage/logs/laravel.log`
- Mobile logs: IDE console output
- Docker logs: `docker compose logs`
