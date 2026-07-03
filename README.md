# Architecture

## Backend
- Repositories: `backend/app/Repositories`
- Controllers: `backend/app/Http/Controllers/Api`
- Models: `backend/app/Models`
- Migrations: `backend/database/migrations`

## Mobile
- `lib/core`: shared DI, colors, routes, platform access
- `lib/data`: models, storage, services, providers
- `lib/features/<feature>`: feature-scoped domain/presentation/data

## Samples / Integrations
- Postman collection in `postman/`
- OpenAPI draft in `docs/openapi.yaml`
- CI workflow in `.github/workflows/ci.yml`

# Contributing

Issues and PRs welcome. Prefer small, focused changes.

# License

MIT
