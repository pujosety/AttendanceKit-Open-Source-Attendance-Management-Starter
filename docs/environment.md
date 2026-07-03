# Environment Variables

Never commit real secrets. Copy example files before starting.

## Backend

Configure in `backend/.env`.

| Variable | Purpose | Example |
|---|---|---|
| `APP_NAME` | App name | `AttendanceKit` |
| `APP_KEY` | Laravel app key | `base64:...` |
| `DB_CONNECTION` | Database driver | `mysql` |
| `DB_HOST` | DB host | `127.0.0.1` |
| `DB_DATABASE` | Database name | `attendance_kit` |
| `DB_USERNAME` | DB username | `root` |
| `DB_PASSWORD` | DB password | *(secret)* |
| `REDIS_HOST` | Redis host | `127.0.0.1` |

## Mobile

Configure in `mobile/.env`.

| Variable | Purpose | Example |
|---|---|---|
| `APP_NAME` | App display name | `AttendanceKit` |
| `API_BASE_URL` | Backend base URL | `http://10.0.2.2:8000/api/v1` |

## Pro tips

- Use `.env.local` or your OS secret manager in production.
- Keep debug flags off in shared builds.
- Rotate API keys when sharing public forks.
