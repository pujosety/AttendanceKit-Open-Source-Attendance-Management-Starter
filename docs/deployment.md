# Deployment

## Backend

- Ensure HTTPS termination in production
- Configure database backups
- Run queue workers and scheduled commands
- Use environment-specific `.env` values
- Enable health checks for containerized deployments

## Mobile

- Build release artifacts with `flutter build apk` or `flutter build appbundle`
- Configure signing keystore
- Point `API_BASE_URL` to the production backend
- Test release builds on physical devices before publishing

## Docker

- Use `docker compose` for local or staging
- Do not run production databases with default credentials
- Pin image digests for reproducible builds
- Set resource limits for containers

## Environment Hygiene

- Do not copy `.env` into version control
- Rotate secrets regularly
- Use a secrets manager for production values
- Audit third-party dependencies before major releases
